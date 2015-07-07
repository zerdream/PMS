@extends('welcome')

@section('content')
<div id="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-underline">
                <div class="card-head">
                    <ul class="nav nav-tabs pull-right" data-toggle="tabs">
                        <li class="active"><a href="tabs.html#first2">角色信息维护</a></li>
                        <li><a href="tabs.html#second2">人员信息维护</a></li>
                    </ul>
                    <header>人员信息</header>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="first2">						<p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                    </div>
                    <div class="tab-pane" id="second2">						<p>Ad ius duis dissentiunt, an sit harum primis persecuti, adipisci tacimates mediocrem sit et. Id illud voluptaria omittantur qui, te affert nostro mel. Cu conceptam vituperata temporibus has.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection