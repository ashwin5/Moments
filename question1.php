<!DOCTYPE html>
<?php 
    

    $q=array(
    1 => array( "question" => "At a party do you:",
                            "A" => "  Interact with many,including strangers",
                            "B" => "  Interact with a few,know to you"
                            ),

    2 => array( "question" => "Are you more:",
                            "A" => "  Realistic than speculative", 
                            "B" => "  Speculative than realistic"
                            ), 
                
    3 => array( "question" => "Is it worse to:", 
                                "A" => "  Have your 'head in the clouds'", 
                                "B" => "  Be 'in a rut'"
                                ),
                
    4 => array( "question" => "Are you more impressed by:", 
                                "A" => "  Principles", 
                                "B" => "  Emotions"
                                ),

    5 => array( "question" => "Are more drawn toward the:", 
                            "A" => "  Convincing", 
                            "B" => "  Touching"
                            ), 

    6 => array( "question" => "Do you prefer to work:", 
                            "A" => "  To deadlines", 
                            "B" => "  Just 'whenever'"
                            ), 

    7 => array( "question" => "Do you tend to choose:", 
                            "A" => "  Rather carefully", 
                            "B" => "  Somewhat impulsively"
                            ), 

    8 => array( "question" => "At party do you:", 
                            "A" => "  Stay late,with increasing energy", 
                            "B" => "  Leave early with decreased energy"
                            ), 

    9 => array( "question" => "Are you more attracted to:", 
                            "A" => "  Sensible people", 
                            "B" => "  Imaginative people"
                            ),

    10 => array( "question" => "Are you more interested in:", 
                            "A" => "  What is actual", 
                            "B" => "  What is possible"
                            ),

    11 => array( "question" => "In judging others are you more swayed by:", 
                            "A" => "  Laws than circumstances", 
                            "B" => "  Circumstances than laws"
                            ),

    12 => array( "question" => "In approaching others is your inclination to be somewhat:", 
                            "A" => "  Objective", 
                            "B" => "  Personal"
                            ),

    13 => array( "question" => "Are you more:", 
                            "A" => "  Punctual", 
                            "B" => "  Leisurely"
                            ),

    14 => array( "question" => "Does it bother you more having things:", 
                            "A" => "  Incomplete", 
                            "B" => "  Completed"
                            ), 

    15 => array( "question" => "Is your social groups do you:", 
                            "A" => "  Keep abreast of other's happenings", 
                            "B" => "  Get behind on the news"
                            ), 

    16 => array( "question" => "In doing ordinary things are you more likely to:", 
                            "A" => "  Do it the usual way", 
                            "B" => "  Do it your own way"
                            ), 

    17 => array( "question" => "Writers should:", 
                            "A" => "  'Say what they mean and what they say'", 
                            "B" => "  Express things more by use of analogy"
                            ), 

    18 => array( "question" => "Which appeals do you more:", 
                            "A" => "  Consistency of thought", 
                            "B" => "  Harmonious human relationships"
                            ), 

    19 => array( "question" => "Are you more comfortable in making:", 
                            "A" => "  Logical judgements", 
                            "B" => "  Value judgements"
                            ), 

    20 => array( "question" => "Do you want things:", 
                            "A" => "  Settled and decided", 
                            "B" => "  Unsettled and undecided"
                            ),

    21 => array( "question" => "Would you say you are more:", 
                            "A" => "  Serious and determined", 
                            "B" => "  Easy-going"
                            ), 

    22 => array( "question" => "In phoning do you:", 
                                "A" => "  Rarely question that it will all we said", 
                                "B" => "  Rehearse what you'll say"
                                ), 

    23 => array( "question" => "Facts:", 
                            "A" => "  'speak for themselves'", 
                            "B" => "  Illustrate principles"
                            ), 

    24 => array( "question" => "Are visionaries:", 
                            "A" => "  Somewhat annoying", 
                            "B" => "  Rather fascinating"
                            ),

    25 => array( "question" => "Are you more often:", 
                            "A" => "  A cool-headed person", 
                            "B" => "  A warm-hearted person"
                            ), 

    26 => array( "question" => "Is it worse to be:", 
                            "A" => "  Unjust", 
                            "B" => "  Merciless"
                            ), 
    27 => array( "question" => "Should one usually let events occur:", 
                            "A" => "  By careful selection and choice", 
                            "B" => "  Randomly and by chance"
                            ), 

    28 => array( "question" => "Do you feel better about:", 
                            "A" => "  Having purchased", 
                            "B" => "  Having the option to buy"
                            ), 

    29 => array( "question" => "In company do you:", 
                            "A" => "  Initiate conversation", 
                            "B" => "  Wait to be approached"
                            ), 

    30 => array( "question" => "Common sense is:", 
                            "A" => "  Rarely questionable", 
                            "B" => "  Frequently questionable"
                            ), 

    31 => array( "question" => "Children often do not:", 
                            "A" => "  Make themselves useful enough", 
                            "B" => "  Exercise their fantasy enough"
                            ),

    32 => array( "question" => "In making decisions do you feel more comfortable with:", 
                            "A" => "  Standards", 

    34 => array( "question" => "Which is more admirable:", 
                            "A" => "  The ability to organize and to be methodical", 
                            "B" => "  The ability to adapt and make do"
                            ),

    35 => array( "question" => "Do you put more value on:", 
                            "A" => "  Infinite", 
                            "B" => "  Open-minded"
                            ),

    36 => array( "question" => "Does new and non-routine interaction with others:", 
                            "A" => "  Stimulate and energize you", 
                            "B" => "  Tax your reserves"
                            ), 


    38 => array( "question" => "Are you more likely to:", 
                            "A" => "  See how others are useful", 
                            "B" => "  See how others see"
                            ), 
    46 => array( "question" => "Which is more of a compliment:", 
                            "A" => "  'There is a very logical person'", 
                            "B" => "  'There is a very sentimental person'"
                            ),

    47 => array( "question" => "Do you value in yourself more than you are:",         
                            "A" => "  Unwavering", 
                            "B" => "  Devoted"
                            ), 

    48 => array( "question" => "Do you more often prefer the:", 
                            "A" => "  Final and unalterable statement", 
                            "B" => "  Tentative and preliminary statement"
                            ), 

    49 => array( "question" => "Are you more comfortable:", 
                            "A" => "  After a decision", 
                            "B" => "  Before a decision"
                            ), 

    50 => array( "question" => "Do you:", 
                            "A" => "  Speak easily and at length with strangers", 
                            "B" => "  Find little to say to strangers"
                            ), 

    51 => array( "question" => "Are you more likely to trust your:", 
                            "A" => "  Experience", 
                            "B" => "  Hunch"
                            ), 

    52 => array( "question" => "Do you feel:", 
                            "A" => "  More practical than ingenious", 
                            "B" => "  More ingenious than practical"
                            ),

    53 => array( "question" => "Which person is more to be complicated one of:", 
                            "A" => "  Clear reason", 
                            "B" => "  Strong feeling"
                            ),         

    54 => array( "question" => "Are you inclined more to be:", 
                            "A" => "  Fairly-minded", 
                            "B" => "  sympathetic"
                            ),

    55 => array( "question" => "Is it preferable mostly to:", 
                            "A" => "  Make sure things are arranged", 
                            "B" => "  Just let things happen"
                            ),

    56 => array( "question" => "In relationships should most things be:", 
                            "A" => "  Re-negotiable", 
                            "B" => "  Random and circumstantial"
                            ), 

    57 => array( "question" => "When the phone rings do you:",         
                            "A" => "  Hasten to get it first", 
                            "B" => "  Hope someone else will answer"
                            ), 

    58 => array( "question" => "Do you prize more in yourself:", 
                            "A" => "  A strong sense of reality", 
                            "B" => "  A vivid imagination"
                            ), 

    59 => array( "question" => "Are you drawn more to:", 
                            "A" => "  Fundamentals", 
                            "B" => "  Overtones"
                            ), 

    60 => array( "question" => "Which seems the greater error:", 
                            "A" => "  To be too passionate", 
                            "B" => "  To be too objective"
                            ), 

    61 => array( "question" => "Do you see yourself as basically:", 
                            "A" => "  Hard-hearted", 
                            "B" => "  Soft-hearted"
                            ), 

    62 => array( "question" => "Which situation appeals to you more:", 
                            "A" => "  The structured and scheduled", 
                            "B" => "  The unstructured and unscheduled"
                            ), 

    63 => array( "question" => "Are you a person that is more:", 
                            "A" => "  Routinised than whimsical", 
                            "B" => "  Whimsical than routinised"
                            ), 

    64 => array( "question" => "Are you more inclined to be:", 
                            "A" => "  Easy to approach", 
                            "B" => "  Somewhat reserved"
                            ),

    65 => array( "question" => "In writings do you prefer:", 
                            "A" => "  The more literal", 
                            "B" => "  The more figurative"
                            ), 

    66 => array( "question" => "Is it harder for you to:", 
                            "A" => "  Identify with others", 
                            "B" => "  Utilize others"
                            ), 

    67 => array( "question" => "Which do you wish more for yourself:", 
                            "A" => "  Clarity of reason", 
                            "B" => "  Strength of compassion"
                            ),

    68 => array( "question" => "Which is the greater fault:", 
                            "A" => "  Being indiscriminate", 
                            "B" => "  Being critical"
                            ), 

    69 => array( "question" => "Do you prefer the:", 
                            "A" => "  Planned event", 
                            "B" => "  Unplanned event"
                            ), 

    70 => array( "question" => "Do you tend to be more:", 
                            "A" => "  Deliberate than spontaneous", 
                            "B" => "  Spontaneous than deliberate"
                            ),
    );


 ?>


<html>
<head><title>ashwin</title></head>
<body><p>something</p>

<?php 
echo "hello!";

 ?>
</body>
</html>