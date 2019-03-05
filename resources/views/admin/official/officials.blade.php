<style>
    .info-box
    {
        width: 70% !important;
        margin-bottom:70px !important;
        margin-left: 70px;
    }
    .row{
        background: #ffffff !important;
        width: 80% !important;
        margin: 5% auto;
        padding-top: 2%;


    }
    .info-box
    {
        border: 1px solid #cccccc;
    }
</style>

<div class="col-md-12">
    <h4>请选择您的公众号</h4>
    <br>
</div>
@foreach($data as $value)

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">

            <img class="info-box-icon" style="margin-top: 10px;" src="/test.jpg" alt="User Avatar">


            <div class="info-box-content">

                <span class="info-box-text"><h4>辽宁魔法屋</h4></span>
                <p>类型：服务号</p>
                <p>认证：已认证 <a class="pull-right" href="">进入</a></p>

            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

@endforeach
