<div>
    




 






    <div class="row">

        <div class="col-md-8">
    
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Total Sub Card Categories <span class="badge badge-pill badge-danger"></span></h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th>Category Name </th>
                           <th>Subcategory</th>
                        <th>Rate</th>
                        <th>Action</th>
                          <th>Best Rated</th> 
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($subcard as $ca)
                       <tr>
                       <td>{{$ca['card']['name']}}</td>
                           <td>{{$ca->name}}</td>
                           <td>${{$ca->rate}}</td>
                          
                           <td >
                  <a  class="btn btn-info  " wire:click="edit({{ $ca->id }})" ><i class="fa fa-edit"></i>Edit Rate</a>
                               <a  class="btn btn-danger  " wire:click="delete({{ $ca->id }})" ><i class="fa fa-trash"></i></a>
                           </td>


                           <td>
                            @if($ca->is_best == 0)
                              <input type="button" class="btn btn-danger bg-danger text-white btn-sm" value="No" wire:click="yesBest({{ $ca->id }})">
                              @else
                              <input type="button" value="Yes"  class="btn btn-success bg-success text-white btn-sm" wire:click="NoBest({{ $ca->id }})">
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
    
  
     
    
    
    
    



        @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
















</div>

