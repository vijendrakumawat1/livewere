<div>
<style>
        
        .black-color {
        color:red;
        border-bottom-width:5px;
    }

    </style>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if($updateMode)
    @include('livewire.update')
    @else
    @include('livewire.create')
    @endif
    <!-- Search box -->
    <div class="form-group">
        <label for="exampleFormControlInput1"></label>
        <input type="text" class="form-control" placeholder="Search Title or Body" style="width: 250px;" wire:model="searchTerm" >
    </div>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th class="sort" wire:click="sortOrder('id')" >Id{!! $sortLink !!}     <span class="bi bi-arrow-down-up "> </span>
 </span></th>
                <th class="sort" wire:click="sortOrder('title')">Title {!! $sortLink !!}</th>
                <th class="sort" wire:click="sortOrder('body')">Body {!! $sortLink !!}</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>
                    <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(!empty($posts))
        {{ $posts->links() }}
    @endif
</div>
