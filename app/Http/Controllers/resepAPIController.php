<?php

namespace App\Http\Controllers;

use App\Http\Requests\createResepRequest;
use App\Http\Requests\updateResepRequest;
use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class resepAPIController extends Controller
{
    public function getReseps(Request $request) {
        $resepDB = new Resep();

        $datas = $resepDB->getAll();

        return response()->json($datas);
    }

    public function getResepsWithAuth(Request $request) {
        $resepDB = new Resep();

        $datas = $resepDB->getAll();
        return response()->json($datas);
    }

    public function searchReseps(Request $request) {
        $resepDB = new Resep();
        
        // Validate
        if ($request->has('searchToken')) {
            if(!is_string($request->input('searchToken'))) { return response()->json(['error' => 'invalid params'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY); }
            $token = $request->input('searchToken');

            $page = 1;
            if($request->has('page')) {
                if(!is_numeric($request->input('page'))) { return response()->json(['error' => 'invalid params, page not'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY); }
                $page = $request->input('page');
            }

            $datas = $resepDB->search($token, $page);

            return response()->json($datas['searchResult']);
        }

        return response()->json(['error' => 'invalid params'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function getResep(Request $request) {
        $resepDB = new Resep();

        if(!$request->has('id')) { return response()->json(['error' => 'invalid params'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY); }

        if(!is_string($request->input('id'))) { return response()->json(['error' => 'invalid params'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY); }

        $id = $request->input('id');

        if(!$resepDB->hasEntry($id)) { return response()->json(['error' => 'not found'], 404); }

        return response()->json($resepDB->getData($id));
    }

    public function myReseps(Request $request) {
        $resepDB = new Resep();

        $uid = $request->header('username');

        return response()->json($resepDB->getByMaker($uid));
    }

    public function createResep(createResepRequest $request) {

        $data = $request->all();
        $resep = new Resep;

        $id = $resep->insertData(
            $data['nama'], 
            $this->wrapText($data['langkah']),
            $this->wrapText($data['bahan']),
            $this->wrapText($data['alat']), 
            $this->wrapText($data['waktu']),
            $request->header('username'));

        $defaultPicturePath = 'public/foto-resep/def.jpg';

        // Specify the destination path
        $destinationPath = 'public/foto-resep/'.$id.'.jpg';

        Storage::copy($defaultPicturePath, $destinationPath);

        return response()->json();
    }

    public function deleteResep(Request $request) {
        $resepDB = new Resep();

        if(!$request->has('id')) { return response()->json(['error' => 'invalid params'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY); }
        $id = $request->input('id');

        if(!$resepDB->hasEntry($id)) { return response()->json(['error' => 'resep not found'], 404); }
        if(!$this->checkBelongsTo($request->header('username'), $id)) { return response()->json(['error' => 'unauthorized access'], 403); }

        $resepDB->deleteData($id);

        return response()->json();
    }

    public function updateResep(updateResepRequest $request) {
        $resepDB = new Resep();
        $id = $request->input('id');

        if (!$resepDB->hasEntry($id)) { return response()->json([], 404); }

        if (!$this->checkBelongsTo($request->header('username'), $id)) { return response()->json([], 403); }

        $data = $request->all();

        $resepDB->updateData(
            $data['id'],
            $data['nama'], 
            $this->wrapText($data['langkah']),
            $this->wrapText($data['bahan']),
            $this->wrapText($data['alat']), 
            $this->wrapText($data['waktu']));

        if($request->has('foto-resep')) {
            if($request->file('foto-resep')->isValid())
            $request->file('foto-resep')->storeAs('public/foto-resep/'.$data['id'].'.jpg');
        }

        return response()->json();
    }

    private function checkBelongsTo($username, $id) {
        $resep = new Resep;

        if($resep->getData($id)->user_id == $username) {
            return true;
        }

        return false;
    }

    private function wrapText($string){
        return str_ireplace(";;", ";", str_ireplace(["\n", "\r\n", "\r"], ';', $string));
    }
}
