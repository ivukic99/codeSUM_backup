<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Category;
use App\TextLesson;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::get();
        
        foreach($courses as $course){
            $creator_id = $course->Kreator_id;
            $creator_name = User::where('id', $creator_id)->get(['name'])->first()->name;
            $course->kreirao = $creator_name;
            unset($course->Kreator_id);

            $category_id = $course->Kategorije_id;
            $category_name = Category::where('id', $category_id)->get(['naziv'])->first()->naziv;
            $course->naziv_kategorije = $category_name;
            unset($course->Kategorije_id);

            //unset($course->id);
        }

        return response()->json($courses);
    }

    public function getTextLessons($course_id)
    {
        $course = Course::where('id', $course_id)->first();

        return $course->hasMany(TextLesson::class, 'Tecaj_id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $course = Course::create([
            'Naziv' => $request->Naziv,
            'Opis' => $request->Opis,
            'Kategorije_id' => $request->Kategorija_id,
            'Kreator_id' => $request->Kreator_id
        ]);

        return response()->json($course->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tecaj_id)
    {
        return Course::where('id', $tecaj_id)->delete();
    }
}
