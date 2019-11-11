<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('bower_components\jquery\dist\jquery.js')}}"></script>

<script language="Javascript">
    function frameclose() {
        parent.close()
        window.close()
        self.close()
    }

</script>


<div class="container register-form">

    <div class="form-content">
        <div class="col-md-6">
            <form action="{{url('addChapter')}}/{{$num}}" method="post" name="posts" id="addChapterForm">
                <div class="form-group">
                    챕터<input type="text" class="form-control" placeholder="" value="" name="subtitle" style="width:400px;" />
                </div>

                <input type="submit" class="btnSubmit" value="추가">
                <button type="button" class="btnSubmit" onclick="location.href='javascript:frameclose()'">취소</button>
            </form>
        </div>
    </div>

</div> 