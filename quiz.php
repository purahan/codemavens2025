<?php
  include('includes/functions.php');
  $previous_question='';
  $next_question='';

  if(!empty($_POST)) {
    if (isset($_POST['next'])) {
      if($_REQUEST['q'] == '1') {
        $userAnswers=array();
        $userAnswers[]=$_POST['answer'];
        $_SESSION['userAnswers']=$userAnswers;
      } else {
        $userAnswers=$_SESSION['userAnswers'];
        $userAnswers[]=$_POST['answer'];
        $_SESSION['userAnswers']=$userAnswers;
      }
      header("Location: quiz.php?id=".$_REQUEST['id']."&q=".($_REQUEST['q']+1));
    }
    if (isset($_POST['previous'])) {
      $userAnswers=$_SESSION['userAnswers'];
      $userAnswers[]=$_POST['answer'];
      $_SESSION['userAnswers']=$userAnswers;
      header("Location: quiz.php?id=".$_REQUEST['id']."&q=".($_REQUEST['q']-1));
    }
    if (isset($_POST['submit'])) {
      $userAnswers=$_SESSION['userAnswers'];
      $userAnswers[]=$_POST['answer'];
      $str_answers = '';
      $correct_answers = 0;
      $incorrect_answers = 0;

      if(count($userAnswers)>0) {
        $str_answers = implode(',', $userAnswers);
        $check_answer_result = $conn->query("SELECT is_correct FROM `quiz_answers` WHERE `id` IN (".$str_answers.")");
        if($check_answer_result->num_rows > 0) {
          while($answer = $check_answer_result->fetch_assoc()) {
            if($answer['is_correct']=='Y') {
              $correct_answers++;
            } else {
              $incorrect_answers++;
            }
          }
        }
      }

      $sql = "DELETE FROM `quiz_result` WHERE user_id='".$_SESSION['id']."' AND experiment_id='".$_REQUEST['id']."'";
      $conn->query($sql);

      $sql = "INSERT INTO `quiz_result` (`user_id`, `experiment_id`, `answers`, `correct_answers`, `incorrect_answers`, `total_questions`, `submitted_on`) VALUES ('".$_SESSION['id']."', '".$_REQUEST['id']."', '".$str_answers."', '".$correct_answers."', '".$incorrect_answers."', '".$_SESSION['question_count']."', '".date("Y-m-d")."')";
      $conn->query($sql);
      header("Location: quiz-result.php?id=".$_REQUEST['id']);
    }
  }

  if(isset($_REQUEST['id']) && isset($_SESSION['id'])) {
    // $conn->query("INSERT INTO `user_experiments` (user_id, experiment_id, type, created_on) VALUES ('".$_SESSION['id']."', '".$_REQUEST['id']."', 'Q', NOW())");
  }
  if(isset($_REQUEST['id'])) {
    $question_result = $conn->query("SELECT * FROM `quiz_questions` WHERE `experiment_id`='".$_REQUEST['id']."' order by `id` limit ".($_REQUEST['q']-1).",1");
    if($question_result->num_rows > 0) {
      $question = $question_result->fetch_assoc();
      $answer_result = $conn->query("SELECT * FROM `quiz_answers` WHERE `question_id`='".$question['id']."'");
    }
    $question_count_result = $conn->query("SELECT count(id) as question_count FROM `quiz_questions` WHERE `experiment_id`='".$_REQUEST['id']."'");
    if($question_count_result->num_rows > 0) {
      $question_count = $question_count_result->fetch_assoc();
      $_SESSION['question_count'] = $question_count['question_count'];
    }
    if($_REQUEST['q']>1) {
      $previous_question=$_REQUEST['q']-1;
    }
    if($_REQUEST['q'] < $question_count['question_count']) {
      $next_question=$_REQUEST['q']+1;
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
          <input type="hidden" name="id" value="<?=$_REQUEST['id']?>" />
          <input type="hidden" name="q" value="<?=$_REQUEST['q']?>" />
          <div class="border">
            <div class="question bg-white p-3 border-bottom">
                <div class="d-flex flex-row justify-content-between align-items-center mcq">
                    <h4>Quiz</h4><span>(<?=$_REQUEST['q']?> of <?=$question_count['question_count']?>)</span>
                </div>
            </div>
            <div class="question bg-white p-3 border-bottom">
                <div class="d-flex flex-row align-items-center question-title">
                    <h3 class="text-danger">Q.</h3>
                    <h5 class="mt-1 mx-2"><?=$question['question']?></h5>
                </div>
                <?php
                if($answer_result->num_rows > 0) {
                  while($answer = $answer_result->fetch_assoc()) {
                ?>
                  <div class="ans ml-2 my-2">
                      <label class="radio"> <input type="radio" name="answer" value="<?=$answer['id']?>"> <span><?=$answer['answer']?></span></label>
                  </div>
                <?php
                  }
                }
                ?>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
              <?php if($previous_question) { ?>
                <button class="btn btn-primary d-flex align-items-center btn-danger" type="submit" name="previous"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button>
              <?php } else {
                echo '<span></span>';
              } ?>
              <?php if($next_question) { ?>
                <button class="btn btn-primary border-success align-items-center btn-success" type="submit" name="next">Next <i class="fa fa-angle-right ml-2"></i></button>
              <?php } else { ?>
                <button class="btn btn-primary border-success align-items-center btn-success" type="submit" name="submit">Submit</button>
              <?php } ?>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</main><!-- End #main -->
<?php page_footer(false); ?>