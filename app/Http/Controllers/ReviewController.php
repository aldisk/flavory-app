<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function insertReview(Request $request) {
        $request->validate([
            'rid' => ['required', 'integer'],
            'review' => ['required', 'string'],
            'rating' => ['required', 'integer', 'gte:1', 'lte:5']
        ]);

        $review = new Review;
        $data = $request->all();

        if(!$review->hasReviewed($request->session()->get('username'), $data['rid'])) {
            $review->insertReview($data['review'], $data['rating'], $request->session()->get('username'), $data['rid']);
            return redirect('resep/view/'.$data['rid']);
        }

        return back();
    }

    public function updateReview(Request $request) {
        $request->validate([
            'rid' => ['required', 'integer'],
            'review' => ['required', 'string'],
            'rating' => ['required', 'integer', 'gte:1', 'lte:5']
        ]);

        $review = new Review;
        $data = $request->all();

        if($review->hasReviewed($request->session()->get('username'), $data['rid'])) {
            $review->updateReview($data['review'], $data['rating'], $request->session()->get('username'), $data['rid']);
            return redirect('resep/view/'.$data['rid']);
        }

        return back();
    }

    public function deleteReview(Request $request) {
        $request->validate([
            'rid' => ['required', 'integer']
        ]);

        $review = new Review;
        $data = $request->all();

        if($review->hasReviewed($request->session()->get('username'), $data['rid'])) {
            $review -> deleteReview($request->session()->get('username'), $data['rid']);
            return redirect('resep/view/'.$data['rid']);
        }
    }
}
