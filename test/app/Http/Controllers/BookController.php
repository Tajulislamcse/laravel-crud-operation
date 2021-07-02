<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //return  $getAll=Book::where('roll', '=', '11508028')->first();
     $getAll= Book::all();
     return view('generalMember.list',compact('getAll'));
 }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('generalMember.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $book=new Book();
         $book->name=$request->name;
         $book->author=$request->author;
         $book->status=request('status',0);
         $book->save();


        return redirect()->back();
        //     $rules = array(
        //     'first_name'    =>  'required',
        //     'date'     =>  'required'
        // );

        // $error = Validator::make($request->all(), $rules);

        // if($error->fails())
        // {
        //     return response()->json(['errors' => $error->errors()->all()]);
        // }

        // $form_data = array(
        //     'first_name'        =>  $request->first_name,
        //     'date'         =>  $request->date
        // );

        // Book::create($form_data);

        // return response()->json(['success' => 'Data Added successfully.']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $fetchrecordbyid=Book::find($id);
       return view('generalMember.editProfile',compact('fetchrecordbyid'));
   }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $rules = array(
            'first_name'    =>  'required',
            'last_name'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'user_id'=>$id
        );

        Book::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Book=Book::find($id);
        $Book->delete();
        return redirect('/books');
    }
}
