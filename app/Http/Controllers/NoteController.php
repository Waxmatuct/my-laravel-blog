<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Services\BlogService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Class NoteController
 * @package App\Http\Controllers
 */
class NoteController extends Controller
{

    protected BlogService $blogService;

    public function __construct(
        BlogService $blogService
    )
    {
        $this->blogService = $blogService;
    }


    /**
     * @return View
     */
    public function index(): View
    {
        $notes = Note::orderByDesc('created_at')->paginate();

        return view('notes.index', [
            'notes' => $notes,
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('notes.create', [
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
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
     * @param Note $note
     * @return View
     */
    public function show(Note $note): View
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
     * @param Note $note
     * @return View
     */
    public function edit(Note $note): View
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
     * @param Request $request
     * @param $id
     * @return void
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
     * @param Note $note
     * @return RedirectResponse
     */
    public function destroy(Note $note): RedirectResponse
    {
        Note::findOrFail($note->id)->delete();
        return redirect()->route('notes.index')
            ->with('success', 'Запись «' . $note->title . '» успешно удалена');
    }
}
