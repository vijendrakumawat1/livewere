<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $title, $body, $post_id;
    public $updateMode = false;
    protected $paginationTheme = 'bootstrap';

    public $orderColumn = "title";
    public $sortOrder = "asc";
    public $sortLink = '<i class="sorticon fa-solid fa-caret-up"></i>';

    public $searchTerm = "";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function sortOrder($columnName=""){
        $caretOrder = "up";
        if($this->sortOrder == 'asc'){
             $this->sortOrder = 'desc';
             $caretOrder = "down";
        }else{
             $this->sortOrder = 'asc';
             $caretOrder = "up";
        } 
        $this->sortLink = '<i class="sorticon fa-solid fa-caret-'.$caretOrder.'"></i>';

        $this->orderColumn = $columnName;

    }

    public function render()
    {
        $posts = Post::orderby($this->orderColumn, $this->sortOrder)->select('*');
        if(!empty($this->searchTerm)){
             $posts->orWhere('title','like',"%".$this->searchTerm."%");
             $posts->orWhere('body','like',"%".$this->searchTerm."%");
        }

        $posts = $posts->paginate(2);
        return view('livewire.posts', [
            'posts' => $posts,
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->body = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($validatedDate);

        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
