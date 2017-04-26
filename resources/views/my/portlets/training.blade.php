<div class='col-sm-12 bootstro' 
        	data-bootstro-title=""
            data-bootstro-content="Welcome to the Video Training Center in the AmeriBanc University. Please complete each of the modules in their respective order. Each module contains at least one video section. Each video section contains a video that you will be required to watch followed, by a set of 3 to 5 questions per section. Please watch all videos and answer the corresponding questions correctly to unlock the next module." 
            data-bootstro-width="400px" 
            data-bootstro-placement='bottom' 
            data-bootstro-step='0'>

    <div class="panel panel-default">
        
        
        
            <div class="panel-heading">
                <i class="clip-pie"></i>
                Training
            </div>
        
        
        
	
		
              <div style="float:left;">
              		<div class="bootstro" style="" 
                        data-bootstro-title="" 
                        data-bootstro-content="Your training will consist of 7 different modules. You must complete each module in order before proceeding."
                        data-bootstro-placement='right'
                        data-bootstro-width='400px'
                        data-bootstro-step='1'>
                    <a href="/my/training/module1"><img src="/assets/img/portal/training/mod1.jpg" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
                    </div>
              </div>
              <div style="float:left;">
                    <a href="{{ $completedQuizNum >= 5  ? '/my/training/module2' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 5  ? 'mod2.jpg' : 'mod2_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
              </div>
              <div style="float:left;"> 
              		<div class="bootstro" style="" 
                        data-bootstro-title="" 
                        data-bootstro-content="Access to locked modules is attained by completing all quizes in previous modules."
                        data-bootstro-placement='bottom'
                        data-bootstro-width='400px'
                        data-bootstro-step='2'> 
                    <a href="{{ $completedQuizNum >= 9  ? '/my/training/module3' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 9  ? 'mod3.jpg' : 'mod3_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
                    </div>
              </div>
              <div style="float:left;">  
                    <a href="{{ $completedQuizNum >= 10  ? '/my/training/module4' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 10  ? 'mod4.jpg' : 'mod4_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
              </div>
              <div style="float:left;">
                    <a href="{{ $completedQuizNum >= 18  ? '/my/training/module5' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 18  ? 'mod5.jpg' : 'mod5_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
              </div>
              <div style="float:left;">  
                    <a href="{{ $completedQuizNum >= 22  ? '/my/training/module6' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 22  ? 'mod6.jpg' : 'mod6_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
              </div>
              <div style="float:left;">  
                    <a href="{{ $completedQuizNum >= 24  ? '/my/training/module7' : '#' }}" title="You must complete each module in order to continue to the next module."><img src="/assets/img/portal/training/{{ $completedQuizNum >= 24  ? 'mod7.jpg' : 'mod7_lock.jpg' }}" class="pad-right" style="width:180px; padding-bottom:20px;" /></a>
              </div>  
        



    </div>
</div>



