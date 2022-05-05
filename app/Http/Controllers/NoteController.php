<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoteController extends Controller
{

    protected $blogService;

    public function __construct(
        BlogService $blogService
    ) {
        $this->blogService = $blogService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::orderByDesc('created_at')->paginate(12);

        return view('notes.index', [
            'notes' => $notes,
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create', [
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dump($request->all());

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Note::create([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'content' => $request->get('content'),
        ]);

        // return view('notes.create');
        // return response()->json(['message' => 'success']);

        return redirect()->route('notes.index')
            ->with('success', 'Запись успешно добавлена');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        $note = Note::findOrFail($note->id);

        return view('notes.show', [
            'note' => $note,
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        $note = Note::findOrFail($note->id);

        return view('notes.edit', [
            'note' => $note,
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = Note::findOrFail($id);

        $note->title = $request->get('title');
        $note->slug = Str::slug($request->get('title'));
        $note->content = $request->get('content');
        $note->save();

        // return redirect()->route('notes.show', $id)
        //     ->with('success', 'Запись сохранена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
