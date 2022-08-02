@extends('Adhoc.master')
@section('content')
<link href="/css/adhoc/subLegal.css" rel="stylesheet"/>
<div class="nav1">
        <input type="checkbox" id="menu"/>
        <label for="menu" id="nav-icon">&#9776; &nbsp;&nbsp;&nbsp; Revelant Article</label>
    
        
        <div class="multi-level">
            
        <!-- REC 01 -->
        <div class="item">
                <input type="checkbox" id="B1"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B1">Rcommendation 01</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B1-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B1-A">Law 01</label>
                        
                        <ul>
                            <li><a href="{{ url('/tcReport01')}}">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B1-B1"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B1-B1">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>  
                    </div></li>
                </ul>
            </div>


            <!-- REC 02 -->
            <div class="item">
                <input type="checkbox" id="B2"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B2">Rcommendation 02</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B2-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B2-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B2-B2"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B2-B2">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>


             <!-- REC 03 -->
             <div class="item">
                <input type="checkbox" id="B3"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B3">Rcommendation 03</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B3-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B3-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B3-B3"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B3-B3">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 04 -->
            <div class="item">
                <input type="checkbox" id="B4"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B4">Rcommendation 04</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B4-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B4-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B4-B4"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B4-B4">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 05 -->
            <div class="item">
                <input type="checkbox" id="B5"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B5">Rcommendation 05</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B5-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B4-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B5-B5"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B5-B5">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 06 -->
            <div class="item">
                <input type="checkbox" id="B6"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B6">Rcommendation 06</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B6-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B6-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B6-B6"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B6-B6">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>
            
            <!-- REC 07 -->
            <div class="item">
                <input type="checkbox" id="B7"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B7">Rcommendation 07</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B7-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B7-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B7-B7"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B7-B7">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 08 -->
            <div class="item">
                <input type="checkbox" id="B8"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B8">Rcommendation 08</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B8-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B8-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B8-B8"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B8-B8">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 09 -->
            <div class="item">
                <input type="checkbox" id="B9"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B9">Rcommendation 09</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B9-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B9-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B9-B9"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B9-B9">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>

            <!-- REC 10 -->
            <div class="item">
                <input type="checkbox" id="B10"/>
                <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B10">Rcommendation 10</label>
                
                <ul>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B10-A"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B10-A">Law 01</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                    <li><div class="sub-item">
                        <input type="checkbox" id="B10-B10"/>
                        <img src="css/adhoc/img/Arrow.png" class="arrow"><label for="B10-B10">Law 02</label>
                        
                        <ul>
                            <li><a href="#">Article 01</a></li>
                            <li><a href="#">Article 02</a></li>
                            <li><a href="#">Article 03</a></li>
                        </ul>
                    </div></li>
                </ul>
            </div>
        <!--End-->
        </div>
    </div>                



@stop
