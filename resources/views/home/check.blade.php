
<form action="">
    
    <div>
        <label>Url</label>
    </div>
    
    <div>
        <input type="text" name="url" value="{{$url}}"/>
    </div>
        
    <div>
        <label>Code</label>
    </div>
        
    <div>
        <textarea cols="100" style="min-height: 500px; max-height: 500px;"  >{!! $body !!}</textarea>
    </div>

    <input type="submit" value="Enviar" />
</form>