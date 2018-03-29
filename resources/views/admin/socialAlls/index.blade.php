

@extends('layouts.app')

    @extends('admin.header_all')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
               
                    <div class="panel-heading">Socials</div>

                    <div class="panel-body">
                        <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('pages.index', compact('portfolio')) }}">
                        <i class="fa fa-backward" aria-hidden="true"></i> back
                        </a>
                        ||{{ link_to_route('portfolios.index', 'portfolio', null, ['class' => 'btn btn-info btn-xs']) }}
                        {{ link_to_route('admin', 'admin', null, ['class' => 'btn btn-info btn-xs']) }}
                        {{ link_to_route('socialAlls.create', 'create', [$portfolio->id, $page->id], ['class' => 'btn btn-info btn-xs']) }}
                        

                        <hr>
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                            
                                <th width="5%">id</th>
                                <th width="25%">Name</th>
                                <th width="40%">Link</th>
                                <th width="10%">Icon</th>                                
                                <th width="25%">Actions</th>
                            </tr>
                            <tr>
                            
                                <td colspan="5" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        
                        
                        @foreach ($page->socialAlls as $socialAll)
                            <tr>
                             
                                <td>{{$socialAll->id}}</td>
                                <td>{{$socialAll->name}}</td>    
                                <td>{{$socialAll->link}}</td>
                                <td>{{$socialAll->callBack}}</td>
                                
                                
                                <!--??????????????????????????_templates-->
                                <td>
                                    {{Form::open(['route' => array_merge(['socialAlls.destroy',$socialAll->id], compact('portfolio', 'page')), 'class' => 'confirm-delete','method' => 'DELETE'])}}
                                    {{-- link_to_route('socialAlls.show', 'info', ['portfolio' => $portfolio, 'page' => $page, 'socialAll' => $socialAll], ['class' => 'btn btn-success btn-xs']) --}}
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit']) }}
                                    {{Form::close()}}
                                </td>

                            </tr>
                        @endforeach
                        

                        <div class="text-center">
                            { !! $socialAlls->render() !!}

                        </div>
                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
