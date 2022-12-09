<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hadist;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class HadistController extends Controller
{
    public function index(Request $request)
    {
        $data_category = Category::all();
        if ($request->ajax()) {
            $data = Hadist::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a  data-toggle="tooltip" href="/admin/hadist/'.$row->id.'/detail" data-original-title="Edit" class="edit btn btn-info btn-sm"><i class="fa fa-eye"></i></a>';
                        $btn = $btn.'<button  data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem ml-1"><i class="fa fa-edit"></i></button>';
                        $btn = $btn.'<button onclick="deleteConfirmation('.$row->id.',`'.$row->name.'`)" class="delete btn btn-danger btn-sm ml-1"><i class="fa fa-trash"></i></button>';
                        return $btn;
                    })->editColumn('kategori', function ($d) {
                        return $d->category_rol->name;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('Admin.Hadist')->with('category', $data_category);
    }

    public function store(Request $request)
    {
        $category = Category::where('id', $request->category_id)->first();
        $request->validate([
            'arab' => 'mimes:jpeg,png,jpg,gif',
        ]);
        if($file = $request->hasFile('arab')) {
            $time = time();
            $file = $request->file('arab') ;
            $fileName = $file->getClientOriginalName() ;
            $name = $time.'-'.$fileName;
            $destinationPath = public_path().'/images' ;
            $file->move($destinationPath,$name);

            $data =  Hadist::create(
                [
                    'category_id' => $request->category_id,
                    'arab' => $name,
                    'latin' => $request->latin,
                    'translation' => $request->translation,
                    'desc' => $request->desc,
                    'type' => $request->type,
                    'narator' => $request->narator,
                    'theme' => $category->name,
                ]
        );
        Alert::success('Berhasil', 'Berhasil menambahkan data');
        return back();
        }

    }

    public function edit($id)
    {
        $item = Hadist::find($id);
        return response()->json($item);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id', $request->category_id)->first();
        if ($file = $request->file('arab')) {
            $time = time();
            $file = $request->file('arab') ;
            $fileName = $file->getClientOriginalName() ;
            $name = $time.'-'.$fileName;
            $destinationPath = public_path().'/images' ;
            $file->move($destinationPath,$name);
            $data = Hadist::findOrFail($id);
            $data->update([
                'category_id' => $request->category_id,
                'arab' => $name,
                'latin' => $request->latin,
                'translation' => $request->translation,
                'desc' => $request->desc,
                'type' => $request->type,
                'narator' => $request->narator,
                'theme' => $category->name,
            ]);
        }
        else{
            $data = Hadist::findOrFail($id);
            $data->update([
                'category_id' => $request->category_id,
                'latin' => $request->latin,
                'translation' => $request->translation,
                'desc' => $request->desc,
                'type' => $request->type,
                'narator' => $request->narator,
                'theme' => $category->name,
            ]);
        }
        Alert::success('Berhasil', 'Berhasil memperbarui data');
        return back();
    }

    public function detail($id)
    {
        $data = Hadist::find($id);
        return view('Admin.Detail')->with('data', $data);
    }

    public function destroy($id)
    {
        $name = Hadist::find($id);
        $names = $name['name'];
        $delete = Hadist::find($id)->delete();
        if ($delete == 1) {
            $success = true;
            $message = "Data ($names) berhasil di hapus";
        } else {
            $success = true;
            $message = "Item not found";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
