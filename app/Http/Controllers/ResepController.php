<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Review;

class ResepController extends Controller
{
    public function viewResep($id, Request $request) {
        $resep = new Resep;
        $review = new Review;
        $topReview = NULL;
        $userReview = NULL;
        if($resep->hasEntry($id)) {
            if($review->recipeHasReview($id)){
                $topReview = $review->getTopByRID($id);
            }
            if($review->hasReviewed($request->session()->get('username'), $id)){
                $userReview = $review->getReview($request->session()->get('username'), $id);
            }
            $avgRating = $review->getAvg($id);
            $dataResep = $resep->getData($id);
            return view('view-resep', ['data' => $dataResep, 'topReview' => $topReview, 'userReview' => $userReview, 'avgRating' => $avgRating]);
        } else {
            return redirect('/error/404');
        }
    }

    public function viewReview($id, Request $request) {
        $page = 1;
        $data = $request->all();
        if(isset($data['page'])){
            $request->validate([
                'page' => ['integer']
            ]);

            $page = $data['page'];
        }

        $resep = new Resep;
        $review = new Review;

        if($resep->hasEntry($id)) {
            if($review->recipeHasReview($id)){
                $reviews = $review->getPagedByRID($id, $page);
            }
            $dataResep = $resep->getData($id);
            return view('view-resep-rating', ['reviews' => $reviews['reviewPage'], 'resep' => $dataResep, "page" => $page, "maxPage" => $reviews['maxPage']]);
        } else {
            return redirect('/error/404');
        }

    }

    // public function viewReviewPage(Request $request) {
    //     $request->validate([
    //         'page' => ['integer', 'required'],
    //         'rid' => ['integer', 'required']
    //     ]);

    //     $data = $request->all();

    //     $resep = new Resep;
    //     $review = new Review;

    //     if($resep->hasEntry($data['rid'])) {
    //         if($review->recipeHasReview($data['rid'])){
    //             $reviews = $review->getPagedByRID($data['rid'], $data['page']);
    //         }
    //         $dataResep = $resep->getData($data['rid']);
    //         return view('view-resep-rating', ['reviews' => $reviews['reviewPage'], 'resep' => $dataResep, "page" => $data['page'], "maxPage" => $reviews['maxPage']]);
    //     } else {
    //         return redirect('/error/404');
    //     }

    // }

    public function searchResep(Request $request) {
        $searchToken = '';
        $page = 1;
        $data = $request->all();
        if(isset($data['page'])) {
            $request -> validate ([
                'page' => ['integer', 'required']
            ]);

            $searchToken = $data['searchToken'];
            $page = $data['page'];
        }

        $resep = new Resep;
        $result = $resep->search($searchToken, $page);
        $reseps = $result['searchResult'];

        return view('search-resep', ["reseps" => $reseps, "searchToken" => $searchToken, "page" => $page, "maxPage" => $result['maxPage']]);
    }

    public function createResep(Request $request) {
        $request -> validate([
            'nama' => ['required', 'string'],
            'langkah' => ['required', 'string'],
            'bahan' => ['required', 'string'],
            'alat' => ['required', 'string'],
            'waktu' => ['required', 'integer'],
            'foto-resep' => ['required', 'image'],
        ]);

        $file = $request->file('foto-resep');

        if($file->isValid()) {
            $data = $request->all();
            $resep = new Resep;

            $id = $resep->insertData(
                $data['nama'], 
                $this->wrapText($data['langkah']),
                $this->wrapText($data['bahan']),
                $this->wrapText($data['alat']), 
                $this->wrapText($data['waktu']),
                $request->session()->get('username'));

            $file->storeAs('public/foto-resep/'.$id.'.jpg');
            return redirect('/resep/view/'.$id);
        }
    }

    public function createFork(Request $request) {
        $request -> validate([
            'nama' => ['required', 'string'],
            'langkah' => ['required', 'string'],
            'bahan' => ['required', 'string'],
            'alat' => ['required', 'string'],
            'waktu' => ['required', 'integer'],
            'foto-resep' => ['required', 'image'],
            'pid' => ['required', 'integer', 'min:1']
        ]);

        $file = $request->file('foto-resep');

        if($file->isValid()) {
            $data = $request->all();
            $resep = new Resep;

            $id = $resep->insertFork(
                $data['nama'],
                $this->wrapText($data['langkah']),
                $this->wrapText($data['bahan']),
                $this->wrapText($data['alat']), 
                $this->wrapText($data['waktu']),
                $request->session()->get('username'),
                $data['pid']
            );

            $file->storeAs('public/foto-resep/'.$id.'.jpg');
            return redirect('/resep/view/'.$id);
        }
    }

    public function forkResepView($id, Request $request) {
        $resep = new Resep;
        if($resep->hasEntry($id)) {
            $data = $resep->getData($id);
            return view('fork-resep', ['data' => $data]);
        }

        return back();
    }

    public function deleteResep(Request $request) {
        $request -> validate([
            'id' => ['required', 'integer']
        ]);

        $data = $request->all();
        $resep = new Resep;

        if($this->checkBelongsTo($request->session()->get('username'), $data['id'])) {
            $resep->deleteData($data['id']);
            return back();
        }

        return back();
    }

    public function resepUpdatePage($id, Request $request) {
        if($this->checkBelongsTo($request->session()->get('username'), $id)) {
            $resep = new Resep;
            $data = $resep->getData($id);
            return view('update-resep', ['data' => $data]);
        }

        return back();
    }

    public function updateResep(Request $request) {
        $request -> validate([
            'nama' => ['required'],
            'langkah' => ['required'],
            'bahan' => ['required'],
            'alat' => ['required'],
            'waktu' => ['required', 'integer'],
            'foto-resep' => ['image']
        ]);

        $data = $request->all();
        $resep = new Resep;

        if($this->checkBelongsTo($request->session()->get('username'), $data['id'])) {
            $resep->updateData(
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
    
            return redirect('resep/view/'.$data['id']);
        }

        return redirect('/')->with('news', 'unauthorized update');
    }

    private function wrapText($string){
        return str_ireplace(";;", ";", str_ireplace(["\n", "\r\n", "\r"], ';', $string));
    }

    private function checkBelongsTo($username, $id) {
        $resep = new Resep;

        if($resep->getData($id)->user_id == $username) {
            return true;
        }

        return false;
    }
}
