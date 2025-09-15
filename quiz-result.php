<?php
  include('includes/functions.php');
  $previous_question='';
  $next_question='';
  if(isset($_REQUEST['id'])) {
    $quiz_result = $conn->query("SELECT * FROM `quiz_result` WHERE `experiment_id`='".$_REQUEST['id']."' AND user_id='".$_SESSION['id']."'");
    if($quiz_result->num_rows > 0) {
      $result = $quiz_result->fetch_assoc();
      $submitted_on_date = new DateTime($result['submitted_on']);
      $formattedDate = $submitted_on_date->format('F j, Y');
    }
  }
  page_header();
  nav_bar(true);
?>
<div class="body"></div>
  <div class="d-flex mx-md-5 mx-0 mb-0 mb-md-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
    <section class="pt-5 px-3">
      <div class="bg-secondary-msg rounded-3 p-4 mb-4 mt-4">
        <form action="quiz.php" method="post">
          <div class="border">
            <div class="question bg-white p-3 border-bottom">
                <div class="d-flex flex-row justify-content-between align-items-center mcq">
                    <h4>Quiz Result</h4>
                </div>
            </div>
            <div class="question bg-white p-3 border-bottom">
                <div class="d-flex flex-row align-items-center question-title">
                    <h5 class="text-danger">Total Questions:</h5>
                    <h5 class="mt-1 mx-2"><?=$result['total_questions']?></h5>
                </div>
                <div class="d-flex flex-row align-items-center question-title">
                    <h5 class="text-danger">Correct Answers:</h5>
                    <h5 class="mt-1 mx-2"><?=$result['correct_answers']?></h5>
                </div>
                <div class="d-flex flex-row align-items-center question-title">
                    <h5 class="text-danger">Incorrect Answers:</h5>
                    <h5 class="mt-1 mx-2"><?=$result['incorrect_answers']?></h5>
                </div>
                <div class="d-flex flex-row align-items-center question-title">
                    <h5 class="text-danger">Test Attempted On:</h5>
                    <h5 class="mt-1 mx-2"><?=$formattedDate?></h5>
                </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</main><!-- End #main -->
<?php page_footer(false); ?>