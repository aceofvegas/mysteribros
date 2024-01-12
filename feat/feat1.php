<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

 function get_uid(){
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo htmlspecialchars("Login");
    }
    else {
        echo htmlspecialchars($_SESSION["username"]); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../php/head.php'; ?>
</head>
<body>
    <div class="container">
        <header>
            <?php include '../php/header.php'; ?>
        </header>
        
                    <!-- Add your stories here -->
                    <div class="article">
      <img src="../img/ai1.jpg" alt="Article Image" class="article-image">
	</div>
      <div class="article-content">
        <h1 class="article-title">The Rise of AI: A Game-Changer for Business and Society</h1>
        <h2 class="article-subtitle">By BingChat, Powered by GPT4</h2>
		
        <p class="article-text">Artificial intelligence (AI) is a field that has been growing rapidly over the past couple of years, transforming various aspects of our lives and businesses. From movie recommendations and voice assistants to autonomous driving and automated medical diagnoses, AI is increasingly touching people’s lives in different settings. AI has also shown remarkable performance in large data regimes on specific types of tasks, such as becoming the best Go player through self-play or generating natural language text and speech. However, AI is not a monolithic phenomenon, but rather a collection of diverse capabilities and use cases that have different levels of adoption, impact, and potential.</p>
        <p class="article-text">According to a recent report by McKinsey, AI adoption has more than doubled since 2017, though the proportion of organizations using AI has plateaued between 50 and 60 percent for the past few years. A set of companies seeing the highest financial returns from AI continue to pull ahead of competitors, making larger investments in AI, engaging in increasingly advanced practices known to enable scale and faster AI development, and showing signs of faring better in the tight market for AI talent. The report also found that the top use cases for AI are optimization of service operations, marketing and sales, product and service development, strategy and corporate finance, and supply chain management.</p>
        <p class="article-text">Looking ahead, AI is expected to continue to evolve and improve in the next few years. Some of the key predictions for 2023 and beyond are:

            AI will become more ubiquitous and accessible, as more devices and platforms will incorporate AI features and functionalities.
            AI will become more human-like and interactive, as natural language processing and computer vision will enable more natural and seamless communication and collaboration between humans and machines.
            AI will become more responsible and trustworthy, as more standards and regulations will be developed and implemented to ensure ethical and safe use of AI.
            AI will become more creative and generative, as generative adversarial networks (GANs) and other techniques will enable AI to produce novel and realistic content such as images, videos, music, and text.
            AI will become more collaborative and cooperative, as multi-agent systems (MAS) and reinforcement learning (RL) will enable AI to learn from each other and coordinate their actions to achieve common goals.</p>
        <p class="article-text">AI is a powerful technology that has already changed our world in many ways. However, it is not a magic bullet that can solve all our problems. It is a tool that requires careful design, development, deployment, and governance. As we enter a new decade of AI innovation, we should strive to harness its potential while mitigating its risks. We should also remember that AI is not a substitute for human intelligence, but rather a complement that can augment our capabilities and enrich our lives.</p>
        <p class="article-text">(This entire article was written via AI, including the title)</p>
        <p class="article-text"></p>
        </div>
        
		
        <footer>
            <?php include '../php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>