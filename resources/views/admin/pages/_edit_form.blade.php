<div class="form-group">
	
    
    {!!Form::label('old_images', 'Image') !!}
    {!!Html::image('assets/img/'.$page['images']) !!}
    {!!Form::hidden('old_images', $page['images'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_images2', 'Image2') !!}
    {!!Html::image('assets/img/'.$page['images2']) !!}
    {!!Form::hidden('old_images2', $page['images2'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_images3', 'Image3') !!}
    {!!Html::image('assets/img/'.$page['images3']) !!}
    {!!Form::hidden('old_images3', $page['images3'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_images4', 'Image4') !!}
    {!!Html::image('assets/img/'.$page['images4']) !!}
    {!!Form::hidden('old_images4', $page['images4'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_images5', 'Image5') !!}
    {!!Html::image('assets/img/'.$page['images5']) !!}
    {!!Form::hidden('old_images5', $page['images5'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_images6', 'Image6') !!}
    {!!Html::image('assets/img/'.$page['images6']) !!}
    {!!Form::hidden('old_images6', $page['images6'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage', 'enctype'=>'multipart/form-data']) !!}

    {!!Form::label('old_videos', 'Img2') !!}
    {!!Html::image('assets/video/'.$page['videos']) !!}
    {!!Form::hidden('old_videos', $page['videos'], ['file'=>'true','class' => 'form-control', 'filestyle', 'data-buttonText'=>'Chose Immage2', 'enctype'=>'multipart/form-data']) !!}
    
</div>

