  
    {{-- ADD BRNADS --}}
    <div class="col-md-4">
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
        <strong>{{ session::get('message') }}</strong>
        </div>  
        @endif 
        <div class="box">
            <div class="table-responsive container">
            <div class="box-header with-border">
              <h3 class="box-title">Add Sub Card Category</h3>
            </div>
    
    
    <form wire:submit.prevent="submit">
        @csrf

<div class="form-group">
        <label>Select Card Category </label>
       
        <select name="card_id"   class="form-control"  wire:model="card_id" required>
        <option value="" selected="" disabled="" >Select Category</option>
        @foreach ($card as $i)
         <option value="{{ $i->id }}">{{ $i->name }}</option>
       @endforeach
    </select>
        @error('card_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    <div class="form-group">
        <label>SubCard Category Name </label>
       
        <input type="text" class="form-control" name="name" wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
 <div class="form-group">
        <label>Card Rate  In USD</label>
       
        <input type="text" class="form-control"  name="rate" wire:model="rate">
        @error('rate')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    
    
    
    <div class="form-group">
        
        <input type="submit" class="btn btn-rounded btn-info" value="Add Sub Card Category">
    </div>
    
    </form>
    </div>
    
    </div>
    
    </div>