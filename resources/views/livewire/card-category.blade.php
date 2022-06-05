<div>
    











    <div class="row">

        <div class="col-md-8">
    
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Total Categories <span class="badge badge-pill badge-danger"></span></h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th>Category Name </th>
                        <th>Date</th>
                           <th>Action</th>
                           
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($cards as $card)
                       <tr>
                           <td>{{$card->name}}</td>
                           <td>{{ Carbon\Carbon::parse($card->created_at)->format('D, d F Y') }}</td>
                          
                           <td >
                  
                               <a  class="btn btn-danger  btn-sm" wire:click="delete({{ $card->id }})" ><i class="fa fa-trash"></i></a>
                           </td>
                        </tr>
                        @endforeach
                   </tbody>
                 </table>
               </div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
        </div>
    
    
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
              <h3 class="box-title">Add Card Category</h3>
            </div>
    
    
    <form wire:submit.prevent="submit">
        @csrf
    <div class="form-group">
        <label>Card Category Name </label>
       
        <input type="text" class="form-control" name="name" wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
 
    
    
    
    
    <div class="form-group">
        
        <input type="submit" class="btn btn-rounded btn-info" value="Add Category">
    </div>
    
    </form>
    </div>
    
    </div>
    
    </div>
     
    
    
    
    




















</div>
