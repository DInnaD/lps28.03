

@extends('layouts.app')

    @extends('admin.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
               
                    <div class="panel-heading">Pages for <b>{{ $portfolio->name }}</b></div>

                    <div class="panel-body">
                    <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('portfolios.index') }}">
                    <i class="fa fa-backward" aria-hidden="true"></i> back
                    </a>
                       |{{ link_to_route('admin', 'admin', null, ['class' => 'btn btn-info btn-xs']) }}
                       {{ link_to_route('pages.create', 'create', [$portfolio->id], ['class' => 'btn btn-info btn-xs']) }}

                        <hr>
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                            
                                <th width="3%">id</th>
                                <th width="15%">Actions</th>

                                <th width="1%">Alias</th>

                                <th width="15%">Text</th>

                                <th width="5%">Images</th>

                                <td width="3%">Img2</td>
                                <td width="3%">Price</td>

                                <th width="1%">Name</th>
                                <th width="1%">N2</th>
                                <th width="1%">N3</th>
                                <th width="1%">N4</th>
                                <th width="1%">N5</th>
                                <th width="1%">N6</th>

                                <th width="1%">Al2</th>
                                <th width="1%">Al3</th>
                                <th width="1%">Al4</th>
                                <th width="1%">Al5</th>
                                <th width="1%">Al6</th>
                                <th width="1%">Al7</th>
                                <th width="1%">Al8</th>
                                <th width="1%">Al9</th>
                                <th width="1%">Al10</th>
                                <th width="1%">Al11</th>
                                <th width="1%">Al12</th>

                                <th width="1%">Text2</th>
                                <th width="1%">Text3</th>
                                <th width="1%">Text4</th>
                                <th width="1%">Text5</th>
                                <th width="1%">Text6</th>

                                <th width="5%">Images2</th>
                                <th width="5%">Images3</th>
                                <th width="5%">Images4</th>
                                <th width="5%">Images5</th>
                                <th width="5%">Images6</th>


                                <td width="5%">Link</td>
                            </tr>
                            <tr>
                            
                                <td colspan="20" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        
                        
                        @foreach ($portfolio->pages as $page)
                            <tr>
                             
                                <td>{{$page->id}}</td>
                                <td>


                                    {{Form::open(['route' => array_merge(['pages.destroy'], compact('portfolio', 'page')), 'class' => 'confirm-delete','method' => 'DELETE'])}}
                                    {{-- link_to_route('pages.show', 'info', ['portfolio' => $portfolio, 'page' => $page], ['class' => 'btn btn-success btn-xs']) --}}
                                    {{ link_to_route('portfolioAlls.index', 'PORTFOLIO', ['portfolio' => $portfolio,$page->id], ['class' => 'btn btn-success btn-xs']) }}
                                    {{ link_to_route('peopleAlls.index', 'PEOPLE', ['portfolio' => $portfolio,$page->id], ['class' => 'btn btn-success btn-xs']) }}
                                    {{ link_to_route('socialAlls.index', 'SOCIALS', ['portfolio' => $portfolio,$page->id], ['class' => 'btn btn-success btn-xs']) }}


                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}
                                </td>
                                <td>{{$page->name}}</td>
                                <td>{{$page->alias}}</td>
                                <td>{{$page->text}}</td> 
                                <td>{{$page->images}}</td>

                                <td>{{$page->videos}}</td>
                                <td>{{$page->audios}}</td>

                                <td>{{$page->name2}}</td>
                                <td>{{$page->name3}}</td>
                                <td>{{$page->name4}}</td>
                                <td>{{$page->name5}}</td>
                                <td>{{$page->name6}}</td>

                                <td>{{$page->alias2}}</td>
                                <td>{{$page->alias3}}</td>
                                <td>{{$page->alias4}}</td>
                                <td>{{$page->alias5}}</td>
                                <td>{{$page->alias6}}</td>
                                <td>{{$page->alias7}}</td>
                                <td>{{$page->alias8}}</td>
                                <td>{{$page->alias9}}</td>
                                <td>{{$page->alias10}}</td>
                                <td>{{$page->alias11}}</td>
                                <td>{{$page->alias12}}</td>

                                <td>{{$page->text2}}</td>
                                <td>{{$page->text3}}</td>
                                <td>{{$page->text4}}</td>
                                <td>{{$page->text5}}</td>
                                <td>{{$page->text6}}</td>

                                <td>{{$page->images2}}</td>
                                <td>{{$page->images3}}</td>
                                <td>{{$page->images4}}</td>
                                <td>{{$page->images5}}</td>
                                <td>{{$page->images6}}</td>



                                <td>{{$page->link}}</td>

                            </tr>
                        @endforeach
                        

                        <div class="text-center">




                        </div>
                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
