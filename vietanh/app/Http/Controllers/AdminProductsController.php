<?php

namespace App\Http\Controllers;

use App\Nhanvien;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    public function destroy( $id, Request $request ) {
        $product = Nhanvien::findOrFail( $id );
 
        if ( $request->ajax() ) {
            $product->delete( $request->all() );
 
            return response(['msg' => 'Product deleted', 'status' => 'success']);
        }
        return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);
 }
}
