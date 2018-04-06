<form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label for="姓名" class="col-sm-2 control-label" >姓名</label>
        <div class="col-sm-3">
            <input type="text"name="Student[name]"
                   value="{{old('Student')['name'] ? old('Student')['name']:$student->name}}"
                   class="form-control" id="姓名" placeholder="姓名">
        </div>
        <div class="cl-ol-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.name')}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="年龄" class="col-sm-2 control-label" >年龄</label>
        <div class="col-sm-3">
            <input type="number" name="Student[age]"
                   value="{{old('Student')['age']?old('Student')['age']:$student->age}}"
                   class="form-control" id="年龄" placeholder="年龄">
        </div>
        <div class="cl-ol-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" >性别</label>
        <div class="col-sm-3">
            <div class="checkbox">
            @foreach($student->sex() as $ind=>$v)
                    <label>
                        <input type="radio" {{$student->sex=$ind?'checked':''}} name="Student[sex]" value="{{$ind}}" checked>{{$v}}
                    </label>
                @endforeach

                {{--<label>--}}
                {{--<input type="radio" name="Student[sex]"  value="20"> 女--}}
                {{--</label>--}}
                {{--<label>--}}
                {{--<input type="radio" name="Student[sex]"  value="30"> 未知--}}
                {{--</label>--}}
            </div>
        </div>
        <div class="cl-ol-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.sex')}}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" class="btn btn-primary">添加</button>
        </div>
    </div>
</form>