<div>

    <label>Item Name</label>
    <input wire:model="title" type="text" class="form-control"/>
    @if ($errors->has('title'))
        <p style="color: red;">{{$errors->first('title')}}</p>
    @endif
    <label>Description</label>
    <textarea wire:model="content" type="text" class="form-control"/></textarea>
    @if ($errors->has('content'))
        <p style="color: red;">{{$errors->first('content')}}</p>
    @endif
    <label>Status</label>
    <select class="form-control" wire:model="status" >
        <option value="">Choose One</option>
        <option value="pending">Task Pending</option>
        <option value="accomplished">Task Accomplished</option>
    </select>    @if ($errors->has('status'))
        <p style="color: red;">{{$errors->first('status')}}</p>
    @endif
    <br/>
    <button wire:click="save" class="btn btn-primary"><span><i class="fas fa-save"></i></span>Save</button>

</div>
