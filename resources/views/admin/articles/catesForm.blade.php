@extends('admin.common.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类操作
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->

          <div>
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('hx/admin/addCates')}}" method="post"  class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkSubmit();">
          {!!csrf_field()!!}
              <input type="hidden" name="token" value="" />
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">上级分类:</label>

                  <div class="col-sm-5">
                    <select name="cate_one" class="cate_one" id="cate_one" >
                      <option value="0">请选择一级分类</option>
                        @if($cate)
                              @foreach($cate as $c)
                              <option value="{{$c->id}}" >{{$c->name}}</option>
                              @endforeach
                        @endif
                    </select>

                    <select name="cate_two" class="cate_two" id="cate_two">
                      <option value="0">请选择二级分类</option>
                     {{-- @if($cates->two)
                        @foreach($cates->two as $k )
                        <option value="{{ $k->id }}" @if($cates->level == 3 && $cates->cateids[2] == $k->id) selected @endif"> {{ $k->name }}</option>
                        @endforeach
                      @endif--}}
                    </select>
                      <select name="cate_id" class="cate_id" id="cate_id">
                          <option value="0">请选择三级分类</option>
                          {{-- @if($cates->two)
                             @foreach($cates->two as $k )
                             <option value="{{ $k->id }}" @if($cates->level == 3 && $cates->cateids[2] == $k->id) selected @endif"> {{ $k->name }}</option>
                             @endforeach
                           @endif--}}
                      </select>
                  </div>
                 </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">分类名称:</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" placeholder="请填写分类名称" name="name"  id="name" value="">
                      <span class="name" style="color:red"></span>
                    </div>
                  </div>

                 </div>
              <div class="box-footer" style="padding-left: 600px;">
                <input type="hidden" name="id" id="id" value="">
                  <a href="{{url('hx/admin/catesList')}}" class="btn btn-default">取消</a>
                  <input type="submit" class="btn btn-info" value="提交">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
  <script>

      //二级分类
      $('.cate_one').change(function(){
          $(".cate_two").children().remove();
          $(".cate_id").children().remove();
          var value=this.value;
          $.ajax({
              url:'/goods/cate',
              type:'get',
              data:{
                  '_token':'{{csrf_token()}}',
                  'value':value
              },
              success:function (data) {
                  console.log(data);
                  var result = data['data'];
                  $(".cate_two").append("<option value='0'>请选择二级分类</option>");
                  for(var i = 0; i < result.length; i++){
                      /*循环添加所有城市列表*/
                      $(".cate_two").append("<option value='"+result[i].id+"'>"+result[i].name+"</option>");
                  }
              }
          });
      });
      //三级分类
      $(document).on('change', '.cate_two', function (){
          $(".cate_id").children().remove();
          var value=this.value;
          $.ajax({
              url:'/goods/cate',
              type:'get',
              data:{
                  '_token':'{{csrf_token()}}',
                  'value':value
              },
              success:function (data) {
                  var result = data['data'];
                  $(".cate_id").append("<option value='0'>请选择三级分类</option>");
                  for(var i = 0; i < result.length; i++){
                      $(".cate_id").append("<option value='"+result[i].id+"'>"+result[i].name+"</option>");
                  }
              }
          });
      });
   // 表单提交
      function  checkSubmit()
      {
        //分类名称
        if($('#name').val()==0) {
          $('.name').html('分类名称不能为空');
          $('#name').focus();
          return false;
      }
     }
  </script>
      @stop