@extends('user.layouts.master')


@section('user_content')

  <div class="bd-example">

            <div class="row  row-cols-1 row-cols-md-1 g-4">

                <div class="col">

                    <div class="card">

                      @if(Session::has('package_added'))

                                  <div class="alert alert-success d-flex align-items-center" role="alert">

                       <svg class="bi flex-shrink-0 me-2" width="24" height="24">

                           <use xlink:href="#check-circle-fill" />

                       </svg>

                       <div>

                       {{Session::get('package_added')}}

                   </div>

               </div>

               @elseif(Session::has('package_updated'))

               <div class="alert alert-success d-flex align-items-center" role="alert">

            <svg class="bi flex-shrink-0 me-2" width="24" height="24">

            <use xlink:href="#check-circle-fill" />

            </svg>

            <div>

            {{Session::get('package_updated')}}

            </div>

            </div>

            @elseif(Session::has('package_deleted'))

            <div class="alert alert-danger d-flex align-items-center" role="alert">

         <svg class="bi flex-shrink-0 me-2" width="24" height="24">

         <use xlink:href="#check-circle-fill" />

         </svg>

         <div>

         {{Session::get('package_deleted')}}

         </div>

         </div>

     @endif

                    <div class="card-body">

                        <h2 class="card-title">Community Token Lists</h2>

                        <!--<a class="btn btn-primary float-right" href="#" data-bs-toggle="modal" data-bs-target="#addcommunityToken">Add New Community Token</a>-->

                        @include('admin.modals.community_token_addmodal')

                        <hr>

                        <div class="bd-example table-responsive">

                               <table class="">

                                   <thead>

                                       <tr>

                                           <th scope="col">#</th>

                                           <th scope="col">IMAGE</th>

                                           <th scope="col">Token NAME</th>

                                           <th scope="col">Contract Address</th>

                                           <th scope="col">Blockchain</th>

                                           <th scope="col">Total Supply</th>

                                                   <!--<th scope="col">ACTION</th>-->

                                       </tr>

                                   </thead>

                                   <tbody>

                                     @foreach($packages as $row)

                                       <tr>

                                          <td >{{$loop->index+1}}</td>

                                          <td><img src="{{asset('storage/communitytoken/'.$row->image)}}" class="img-fluid avatar avatar-50 avatar-rounded"></td>

                                          <td>{{$row->token_name }}</td>

                                          <td>{{$row->contract_address}}</td>

                                           <td>$ {{$row->blockchain}}</td>

                                            <td>{{$row->total_supply}} </td>
                                            <!--<td>-->
                                            <!--  <a href="/user/packages/edit/{{$row->id}}" > <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M11.021 6.00098L16.4732 10.1881" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> </a>-->
                                            <!--     <a href="/user/packages/delete/{{$row->id}}">                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            </a>-->
                                            <!--</td>-->
                                       </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
