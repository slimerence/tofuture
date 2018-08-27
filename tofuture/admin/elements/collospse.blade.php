<div class="col-md-3">
    <?php
    $maincats = \Smartbro\Models\Cat::LoadFirstLevelCatsInMenu();
    ?>
    <h3>课程分类</h3>
    <hr class="mb-15">
    <div class="online-class">
        @foreach($maincats as $key=>$maincat)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="{{ '#col'.$maincat->id }}">
                            {{$maincat->name}}
                        </a><i class="indicator fa fa-angle-right pull-right"></i>
                    </h4>
                </div>
                <?php $childcats = $maincat->children()->get();
                ?>
                @if(count($childcats)>0)
                    <div id="{{ 'col'.$maincat->id }}" class="panel-collapse collapse {{ $key==0 ? 'show':'' }}">
                        <div class="panel-body">
                            <div class="cats">
                                <ul>
                                    @foreach($childcats as $childcat)
                                        <li><a href="{{ url('listen/'.$childcat->name )}}">{{$childcat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>