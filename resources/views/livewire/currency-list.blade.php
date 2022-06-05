<div>
    




    <div class="row">

        <div class="col-md-8">
    
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Currencies Lists <span class="badge badge-pill badge-danger"></span></h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th>Name </th>
                           <th>Code</th>
                        <th>Symbol</th>
                        <th>Action</th>
                        <th>Default</th>
                          
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($currency as $c)
                       <tr>
                       <td>{{$c->name}}</td>
                           <td>{{$c->code}}</td>
                           <td>{{$c->symbol}}</td>
                          
                           <td >
                              @if ($c->code == 'NGN')
                              <a  class="btn btn-danger  disabled" wire:click="delete({{ $c->id }})" ><i class="fa fa-trash"></i></a>
                              @else
                              <a  class="btn btn-danger  " wire:click="delete({{ $c->id }})" ><i class="fa fa-trash"></i></a>
                                  
                              @endif
                               
                           </td>


                           <td>
                            @if($c->status == 1)
                       <input type="button" value="Yes"  class="btn btn-success bg-success text-white btn-sm" checked wire:click="No({{ $c->id }})">
                       @else
                              
                          <input type="button" value="No"  class="btn btn-danger bg-danger text-white btn-sm" wire:click="Yes({{ $c->id }})">
@endif
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
        
        <div class="box">
            <div class="table-responsive container">
            <div class="box-header with-border">
              <h3 class="box-title">Add Currency</h3>
            </div>
    
    
    <form wire:submit.prevent="AddCurrency">
        @csrf

<div class="form-group">
       <label>Name</label>
       <input type="text" name="name" class="form-control" wire:model="name">
       @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    <div class="form-group">
        <label>Code </label>
       
        <input type="text" class="form-control" name="code" wire:model="code">
        @error('code')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
 <div class="form-group">
        <label>Symbol</label>
       
        <input type="text" class="form-control" placeholder="" name="symbol" wire:model="symbol">
        @error('symbol')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
   <div class="form-group">
   <input type="submit" class="btn btn-rounded btn-primary" value="Add">
    </div>
    
    </form>
    </div>
    
    </div>
    
    </div>
     
    
    
    
    






















