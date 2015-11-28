<?php include('header.php'); ?>
<div class="row">
  <div class="col-sm-3 col-md-3 col-lg-3">
  </div>
  <div class="col-sm-6 col-md-6 col-lg-6 middlecol">
      <div class="price">
      	<H3 class="text-center"><b>PRICE</b></H3> <hr>
      	<div>
      		<h5 class="text-center"><b>Thank you for yoour interest in using our services!</b></h5> <br>
      		<p class="text-justify">Please use the following form to get the exact quote on your assignment. You need to choose type of service, type of assignment, academic level, deadline, number of pages, and auality leve.</p>
      		<p class="text-justify">Please take into account that the price for single-spaced assignments will double. The total fee will be calculated automatically at the bottom of the form.</p>
      		<p class="text-justify">Your are welcome to cantact us if you have any questions about our pricing system. </p>
          <form class="form-horizontal">
            <!-- Start Type of Service -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Type of Service</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">Writing</option>
                  <option value="2">Editing</option>
                  <option value="3">Profreading</option>
                  <option value="4">Rewriting</option>
                  <option value="5">Revising</option>
                </select>
              </div>
            </div>
            <!-- Ends Type of Service -->

            <!-- Start Type of Assignment -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Type of Assignment</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <optgroup label="Admission Essay">
                    <option value="1">Application essay</option>
                    <option value="3">Letter writing</option>
                    <option value="4">Personal statement</option>
                  </optgroup>
                  <optgroup label="Annotated Bibligraphy">
                    <option value="5">Annotated bibliography</option>
                  </optgroup>
                  <optgroup label="Article/Book/Movie">
                    <option value="6">Critique</option>
                    <option value="7">Review</option>
                    <option value="8">Summary</option>
                  </optgroup>
                  <optgroup label="Case Study">
                    <option value="9">Case study</option>
                  </optgroup>
                  <optgroup label="Cousework">
                    <option value="10">Coursework</option>
                  </optgroup>
                  <optgroup label="Dissertation Chapters">
                    <option value="11">Dissertation introduction</option>
                    <option value="12">Dissertation literature review</option>
                    <option value="13">Dissertation methodology</option>
                    <option value="14">Dissertation results</option>
                    <option value="16">Dissertation conclusion</option>
                  </optgroup>
                  <optgroup label="Essay Types">
                    <option value="17">Accounting essay</option>
                    <option value="18">Analytical essay</option>
                    <option value="19">Argumentative essay</option>
                    <option value="20">Biography essay</option>
                    <option value="21">Cause/effect essay</option>
                    <option value="22">Classification essay</option>
                    <option value="50">College essay</option>
                    <option value="25">Creative essay</option>
                    <option value="23">Critical essay</option>
                    <option value="24">Critical thinking essay</option>
                    <option value="26">Definition essay</option>
                    <option value="27">Description essay</option>
                    <option value="28">Expository essay</option>
                    <option value="29">Financial essay</option>
                    <option value="30">Five paragraph essay</option>
                    <option value="31">Formal essay</option>
                    <option value="32">Illustration essay</option>
                    <option value="33">Informal essay</option>
                    <option value="34">Lesson plan</option>
                    <option value="35">Math problems</option>
                    <option value="36">Narrative essay</option>
                    <option value="37">Personal essay</option>
                    <option value="38">Persuasive essay</option>
                    <option value="39">Speech writing</option>
                  </optgroup>
                  <optgroup label="Other">
                    <option value="49">Other</option>
                  </optgroup>
                  <optgroup label="Presentation">
                    <option value="40">Essay format</option>
                    <option value="41">PowerPoint format</option>
                  </optgroup>
                  <optgroup label="Research Paper">
                    <option value="42">Business plan</option>
                    <option value="43">Literature review</option>
                    <option value="44">Research paper</option>
                    <option value="45">Research proposal</option>
                    <option value="46">Research report</option>
                  </optgroup>
                  <optgroup label="Term Paper">
                    <option value="47">Term paper</option>
                  </optgroup>
                  <optgroup label="Thesis Paper">
                    <option value="48">Thesis paper</option>
                  </optgroup>
                </select>
              </div>
            </div>
            <!-- Ends Type of Assignment -->

            <!-- Start Academic Level -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Academic Level</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">High school</option>
                  <option value="2">College</option>
                  <option value="3">University </option>
                  <option value="4">Master`s</option>
                  <option value="5">PhD</option>
                </select>
              </div>
            </div>
            <!-- Ends Academic Level -->

            <!-- Start Deadline -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Deadline</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">12 hours</option>
                  <option value="2">24 hours</option>
                  <option value="3">48 hours</option>
                  <option value="4">3 days</option>
                  <option value="5">4 days</option>
                  <option value="6">5 days</option>
                  <option value="7">7 days</option>
                  <option value="8">10 days</option>
                  <option value="9">2 weeks</option>
                  <option value="10">3 weeks</option>
                  <option value="11">1 month</option>
                  <option value="12">2 months</option>
                </select>
              </div>
            </div>
            <!-- Ends Deadline -->

            <!-- Start Spacing -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Spacing</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">Single</option>
                  <option value="2">Double</option>
                </select>
              </div>
            </div>
            <!-- Ends Spacing -->

            <!-- Start Number of Pages/Words -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Number of Pages/Words</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">1 (275 words double-spaced / 550 words single-spaced)</option>
                  <option value="2">2 (550 words double-spaced / 1100 words single-spaced)</option>
                  <option value="3">3 (825 words double-spaced / 1650 words single-spaced)</option>
                  <option value="4">4 (1100 words double-spaced / 2200 words single-spaced)</option>
                  <option value="5">5 (1375 words double-spaced / 2750 words single-spaced)</option>
                  <option value="6">6 (1650 words double-spaced / 3300 words single-spaced)</option>
                  <option value="7">7 (1925 words double-spaced / 3850 words single-spaced)</option>
                  <option value="8">8 (2200 words double-spaced / 4400 words single-spaced)</option>
                  <option value="9">9 (2475 words double-spaced / 4950 words single-spaced)</option>
                  <option value="10">10 (2750 words double-spaced / 5500 words single-spaced)</option>
                  <option value="11">11 (3025 words double-spaced / 6050 words single-spaced)</option>
                  <option value="12">12 (3300 words double-spaced / 6600 words single-spaced)</option>
                  <option value="13">13 (3575 words double-spaced / 7150 words single-spaced)</option>
                  <option value="14">14 (3850 words double-spaced / 7700 words single-spaced)</option>
                  <option value="15">15 (4125 words double-spaced / 8250 words single-spaced)</option>
                  <option value="16">16 (4400 words double-spaced / 8800 words single-spaced)</option>
                  <option value="17">17 (4675 words double-spaced / 9350 words single-spaced)</option>
                  <option value="18">18 (4950 words double-spaced / 9900 words single-spaced)</option>
                  <option value="19">19 (5225 words double-spaced / 10450 words single-spaced)</option>
                  <option value="20">20 (5500 words double-spaced / 11000 words single-spaced)</option>
                  <option value="21">21 (5775 words double-spaced / 11550 words single-spaced)</option>
                  <option value="22">22 (6050 words double-spaced / 12100 words single-spaced)</option>
                  <option value="23">23 (6325 words double-spaced / 12650 words single-spaced)</option>
                  <option value="24">24 (6600 words double-spaced / 13200 words single-spaced)</option>
                  <option value="25">25 (6875 words double-spaced / 13750 words single-spaced)</option>
                  <option value="26">26 (7150 words double-spaced / 14300 words single-spaced)</option>
                  <option value="27">27 (7425 words double-spaced / 14850 words single-spaced)</option>
                  <option value="28">28 (7700 words double-spaced / 15400 words single-spaced)</option>
                  <option value="29">29 (7975 words double-spaced / 15950 words single-spaced)</option>
                  <option value="30">30 (8250 words double-spaced / 16500 words single-spaced)</option>
                  <option value="31">31 (8525 words double-spaced / 17050 words single-spaced)</option>
                  <option value="32">32 (8800 words double-spaced / 17600 words single-spaced)</option>
                  <option value="33">33 (9075 words double-spaced / 18150 words single-spaced)</option>
                  <option value="34">34 (9350 words double-spaced / 18700 words single-spaced)</option>
                  <option value="35">35 (9625 words double-spaced / 19250 words single-spaced)</option>
                  <option value="36">36 (9900 words double-spaced / 19800 words single-spaced)</option>
                  <option value="37">37 (10175 words double-spaced / 20350 words single-spaced)</option>
                  <option value="38">38 (10450 words double-spaced / 20900 words single-spaced)</option>
                  <option value="39">39 (10725 words double-spaced / 21450 words single-spaced)</option>
                  <option value="40">40 (11000 words double-spaced / 22000 words single-spaced)</option>
                  <option value="41">41 (11275 words double-spaced / 22550 words single-spaced)</option>
                  <option value="42">42 (11550 words double-spaced / 23100 words single-spaced)</option>
                  <option value="43">43 (11825 words double-spaced / 23650 words single-spaced)</option>
                  <option value="44">44 (12100 words double-spaced / 24200 words single-spaced)</option>
                  <option value="45">45 (12375 words double-spaced / 24750 words single-spaced)</option>
                  <option value="46">46 (12650 words double-spaced / 25300 words single-spaced)</option>
                  <option value="47">47 (12925 words double-spaced / 25850 words single-spaced)</option>
                  <option value="48">48 (13200 words double-spaced / 26400 words single-spaced)</option>
                  <option value="49">49 (13475 words double-spaced / 26950 words single-spaced)</option>
                  <option value="50">50 (13750 words double-spaced / 27500 words single-spaced)</option>
                  <option value="51">51 (14025 words double-spaced / 28050 words single-spaced)</option>
                  <option value="52">52 (14300 words double-spaced / 28600 words single-spaced)</option>
                  <option value="53">53 (14575 words double-spaced / 29150 words single-spaced)</option>
                  <option value="54">54 (14850 words double-spaced / 29700 words single-spaced)</option>
                  <option value="55">55 (15125 words double-spaced / 30250 words single-spaced)</option>
                  <option value="56">56 (15400 words double-spaced / 30800 words single-spaced)</option>
                  <option value="57">57 (15675 words double-spaced / 31350 words single-spaced)</option>
                  <option value="58">58 (15950 words double-spaced / 31900 words single-spaced)</option>
                  <option value="59">59 (16225 words double-spaced / 32450 words single-spaced)</option>
                  <option value="60">60 (16500 words double-spaced / 33000 words single-spaced)</option>
                  <option value="61">61 (16775 words double-spaced / 33550 words single-spaced)</option>
                  <option value="62">62 (17050 words double-spaced / 34100 words single-spaced)</option>
                  <option value="63">63 (17325 words double-spaced / 34650 words single-spaced)</option>
                  <option value="64">64 (17600 words double-spaced / 35200 words single-spaced)</option>
                  <option value="65">65 (17875 words double-spaced / 35750 words single-spaced)</option>
                  <option value="66">66 (18150 words double-spaced / 36300 words single-spaced)</option>
                  <option value="67">67 (18425 words double-spaced / 36850 words single-spaced)</option>
                  <option value="68">68 (18700 words double-spaced / 37400 words single-spaced)</option>
                  <option value="69">69 (18975 words double-spaced / 37950 words single-spaced)</option>
                  <option value="70">70 (19250 words double-spaced / 38500 words single-spaced)</option>
                  <option value="71">71 (19525 words double-spaced / 39050 words single-spaced)</option>
                  <option value="72">72 (19800 words double-spaced / 39600 words single-spaced)</option>
                  <option value="73">73 (20075 words double-spaced / 40150 words single-spaced)</option>
                  <option value="74">74 (20350 words double-spaced / 40700 words single-spaced)</option>
                  <option value="75">75 (20625 words double-spaced / 41250 words single-spaced)</option>
                  <option value="76">76 (20900 words double-spaced / 41800 words single-spaced)</option>
                  <option value="77">77 (21175 words double-spaced / 42350 words single-spaced)</option>
                  <option value="78">78 (21450 words double-spaced / 42900 words single-spaced)</option>
                  <option value="79">79 (21725 words double-spaced / 43450 words single-spaced)</option>
                  <option value="80">80 (22000 words double-spaced / 44000 words single-spaced)</option>
                  <option value="81">81 (22275 words double-spaced / 44550 words single-spaced)</option>
                  <option value="82">82 (22550 words double-spaced / 45100 words single-spaced)</option>
                  <option value="83">83 (22825 words double-spaced / 45650 words single-spaced)</option>
                  <option value="84">84 (23100 words double-spaced / 46200 words single-spaced)</option>
                  <option value="85">85 (23375 words double-spaced / 46750 words single-spaced)</option>
                  <option value="86">86 (23650 words double-spaced / 47300 words single-spaced)</option>
                  <option value="87">87 (23925 words double-spaced / 47850 words single-spaced)</option>
                  <option value="88">88 (24200 words double-spaced / 48400 words single-spaced)</option>
                  <option value="89">89 (24475 words double-spaced / 48950 words single-spaced)</option>
                  <option value="90">90 (24750 words double-spaced / 49500 words single-spaced)</option>
                  <option value="91">91 (25025 words double-spaced / 50050 words single-spaced)</option>
                  <option value="92">92 (25300 words double-spaced / 50600 words single-spaced)</option>
                  <option value="93">93 (25575 words double-spaced / 51150 words single-spaced)</option>
                  <option value="94">94 (25850 words double-spaced / 51700 words single-spaced)</option>
                  <option value="95">95 (26125 words double-spaced / 52250 words single-spaced)</option>
                  <option value="96">96 (26400 words double-spaced / 52800 words single-spaced)</option>
                  <option value="97">97 (26675 words double-spaced / 53350 words single-spaced)</option>
                  <option value="98">98 (26950 words double-spaced / 53900 words single-spaced)</option>
                  <option value="99">99 (27225 words double-spaced / 54450 words single-spaced)</option>
                  <option value="100">100 (27500 words double-spaced / 55000 words single-spaced)</option>
                </select>
              </div>
            </div>
            <!-- Ends Number of Pages/Words -->

            <!-- Start Quality Level -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Quality Level</label>
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                  <option value="1">Standard</option>
                  <option value="2">Premium (+10% of Orders Total)</option>
                  <option value="3">Platinum (+30% of Orders Total)</option>
                </select>
              </div>
            </div>
            <!-- Ends Quality Level -->

            <!-- Start Order's Total -->
            <div class="form-group form-group-sm">
              <label class="col-sm-3">Quality Level</label>
              <!--
              <div class="col-sm-9">
                <select class="form-control" >
                  <option value>(Please Choose)</option>
                </select>
              </div> -->
            </div>
            <!-- Ends Order's Total -->

            <div class="text-center order">
              <button type="button" class="btn ordernow">ORDER NOW</button>
            </div>


          </form>
      		
      	</div>
      </div>
  <div class="col-sm-3 col-md-3 col-lg-3">
  </div>
</div>
<?php include('footer.php'); ?>