<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatterHelper;
use App\Models\EbookTransaction;
use App\Models\PodTransaction;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    public function getBook(Request $request)
    {
        $pods = PodTransaction::where('author_id', $request->author)->get();
        $ebooks = EbookTransaction::where('author_id', $request->author)->get();

        $response = ResponseFormatterHelper::generateResponseOnlyBook($pods, $ebooks);

        return response()->json($response);
    }

    public function getYear(Request $request)
    {
        $pods = PodTransaction::where('author_id', $request->author)->where('book_id', $request->book)->get();
        $ebooks = EbookTransaction::where('author_id', $request->author)->where('book_id', $request->book)->get();

        $response = ResponseFormatterHelper::generateResponseOnlyYear($pods, $ebooks);
        return response()->json($response);
    }


}
