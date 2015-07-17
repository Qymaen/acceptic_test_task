<div class="transcript_system_container">
    <?php if (count($ratingsAll) > 0) : ?>
        <div class="transcript_system_content">

            <div class="student_select_container">
                <label for="userId">Select student:</label>
                <select name="userId" id="userId">
                    <?php foreach ($ratingsAll as $userID => $rating) : ?>
                        <option value="<?php echo $userID?>" <?php if ($studentId === $userID) echo 'selected'; ?>>
                            <?php echo $rating[0]['user_name'] . ' ' . $rating[0]['user_last_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <hr class="separator">

            <?php if ($studentInfo) : ?>
                <div class="student_info_container">

                    <div class="student_name">
                       Name: <?php echo $studentInfo[0]['user_name'] . ' ' . $studentInfo[0]['user_last_name']; ?>
                    </div>

                    <div class="student_id">
                        Id: <?php echo $studentInfo[0]['user_id']; ?>
                    </div>

                    <div class="student_gpa">
                        <span class="gpa_container">GPA: <span>0</span></span>
                    </div>

                    <div class="student_major">
                        Major: <?php echo $specialization; ?>
                    </div>

                    <hr class="separator">

                    <div class="student_ratings_container">
                        <?php foreach ($seasonRatings as $seasonName => $seasonValue) : ?>

                            <div class="season_title">
                                <?php echo $seasonName; ?>
                            </div>

                            <ul class="season_rating">
                                <?php foreach ($seasonValue as $value) : ?>
                                    <li><?php echo $value; ?></li>
                                <?php endforeach; ?>
                            </ul>

                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    <?php else : ?>
        <div class="tip">
            <span>You don't have any records.</span>
        </div>
    <?php endif; ?>
</div>