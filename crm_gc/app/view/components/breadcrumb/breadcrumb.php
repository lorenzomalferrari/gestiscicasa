<?php declare(strict_types=1);

    $li = "";
    foreach($breadcrumb_list as $key => $value){
        $li .= <<<li
            <li>
                <a href="#">$value</a>
            </li>
li;
    }

    $breadcrumb = <<<breadcrumb
        <div class="breadcrumbs-wrap">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-4 col-12">
                        <div class="breadcrumbs-area">
                            <h1>$titlePage</h1>
                        </div>
                    </div>
                    <div class="col-sm-8 col-12">
                        <div class="breadcrumbs-area text-sm-right">
                            <ul>
                                $li
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
breadcrumb;
