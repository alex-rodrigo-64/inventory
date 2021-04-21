<form action="{{ route('ingresar') }}" method="post">
    {{csrf_field()}}

            <label form="Usuario">Usuario:</label>
            <input type="text" class="form-control {{$errors->has('id_numero')?'is-invalid':'' }}"  placeholder="usuario" name="user">
            {!! $errors->first('id_numero','<div class="invalid-feedback">:message</div>') !!}
             
            <br>

            <label form="Password">Contraseña:</label>
            <input type="password" class="form-control {{$errors->has('password')?'is-invalid':'' }}"  placeholder="contraseña" name="password">
            {!! $errors->first('password','<div class="invalid-feedback">:message</div>') !!}
            <br>

    <button type="submit">Ingresar</button>
</form>

