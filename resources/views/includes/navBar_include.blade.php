<header>
    <div id="headerBar"></div>
    <div id="logoBar">
        <a href="{{URL::route('home')}}" title="New Possibilities"><img src="/images/new-possibilities_250.png" /></a>
        <p class="contactUsHeader">
            <strong>Office Location: </strong>Cincinnati<br />
            <strong>Phone: </strong>(555) 555-5555
        </p>
    </div>
    @yield('header')
</header>
<div id="navBar">
    <div id="navButtonsDiv">
        <button class="navButton" id="resultsNavButton">Counseling</button>
        <button class="navButton" id="projectsNavButton">Coaching</button>
        <button class="navButton" id="templatesNavButton">Our Team</button>
        <button class="navButton" id="templatesNavButton">What to Expect</button> <!-- not sure about reality of this page -->
        <button class="navButton" id="emailNavButton">Contact Us</button>
    </div>
    <div id="navInfoDiv">
        <p>Nav info here</p>
    </div>
</div>