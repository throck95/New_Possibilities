<header>
    <div id="headerBar"></div>
    <div id="logoBar">
        <a href="{{URL::route('home')}}" title="New Possibilities"><img src="/images/logo_placeholder.png" /></a>
        <p class="contactUsHeader">
            <strong>Office Location: </strong>Cincinnati<br />
            <strong>Phone: </strong>(555) 555-5555
        </p>
    </div>
    @yield('header')
</header>
<div id="navBar">
    <ul id="navButtonsList">
        <li><a class="@yield('homeClassDefault')" href="{{URL::route('home')}}">Home</a></li>
        <li class="navLi counselingNav">
            <a class="navButton @yield('counselingClassDefault')" href="{{URL::route('counseling')}}">Counseling</a>
            <div class="navContent">
                <a class="@yield('relationshipClassDefault')" href="{{URL::route('relationships')}}">Marriage and Relationships</a>
                <a class="@yield('stressClassDefault')" href="{{URL::route('stress')}}">Stress and Anxiety</a>
                <a class="@yield('substanceClassDefault')" href="{{URL::route('substance')}}">Substance Use</a>
            </div>
        </li>
        <li class="navLi coachingNav">
            <a class="navButton @yield('coachingClassDefault')" href="{{URL::route('coaching')}}">Coaching</a>
            <div class="navContent">
                <a class="@yield('lifePhaseTransitionsClassDefault')" href="{{URL::route('lifePhaseTransitions')}}">Life Phase Transitions</a>
                <a class="@yield('profGrowthClassDefault')" href="{{URL::route('profGrowth')}}">Professional Growth</a>
            </div>
        </li>
        <li><a class="@yield('teamClassDefault')" href="{{URL::route('team')}}">Our Team</a></li>
        <li><a class="@yield('expectationClassDefault')" href="{{URL::route('expectation')}}">What to Expect</a></li>
        <li><a class="@yield('contactClassDefault')" href="{{URL::route('contact')}}">Contact Us</a></li>
    </ul>
</div>