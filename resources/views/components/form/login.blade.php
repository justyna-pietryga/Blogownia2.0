<div class="form-group">
    <i class="fa fa-user"></i>
    {{Form::text($name, $value, array_merge(['class' => 'form-control', 'required'=> 'required'], $attributes))}}
</div>