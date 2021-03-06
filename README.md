# HackingEDU

## Inspiration

Inspired by the gap in communication between the Robotics team members and the coaches, we intended to develop this software to bridge this gap. As presidents for the Lynbrook Robotics team, we understood that cultivating a professional relationship between the younger members and the coaches would help provide longevity to the activity we love to participate it, so we wanted to find a solution.

## What it does

Auxilio, Latin for "assist," is a context-aware writing editing platform that provides feedback to improve writing. There are two modes to our product, "e-mail" and "essay." In "e-mail" mode, the user enters in his or her text through the Auxilio website and gives dynamic suggestions to add the proper elements of an e-mail or add in logistical information if a meeting is being planned. This mode also checks for colloquial terms by cross referencing an SQL database of slang words and warning the user about these terms. As for the "essay" mode, Auxilio provides a unique speech to text function to provide an alternative way to use the product. Additionally, we used Automattic's AfterTheDeadline API to conduct grammar checks on the entered text. This helps make the essay more coherent and elevates the language used in the writing.  

## How we built it

We built Auxilio primarily using PHP and CSS. We started the project by setting a vision of what we wanted the website to look like. We then translated this sketch into reality over the next few hours. We built the web app on IBM's BlueMix platform, which allowed us to rapidly test our code. BlueMix also enabled us to use APIs like the built in Speech to Text API and the MySQL server to add robust features to our product. After we established the framework with BlueMix, we explored Automattic's AfterTheDeadline Grammar Checker which allowed us to efficiently filter grammar and spelling mistakes. At the same time, we used HTML and CSS to polish up the product and give it a professional image.

## Challenges we ran into

We were excited to implement IBM's BlueMix tools to add professionalism and simplicity to our project. However, we were discouraged to find out that IBM had to shut down their North American servers for maintenance. This was a temporary set back, but with the help of Syed, we were able to link our project with the European servers and continue our web app.
Additionally, each team member had to learn different aspects of web development on the fly, so we really had to communicate with one another in order to be efficient.

## Accomplishments that we're proud of

We believe that our biggest accomplishment is that we were able to get a functional product in our very first hackathon. Hacking EDU was founded to provide a opportunity for young students like us access to mentorship and resources we would not have been able to get.
Besides that, we are also proud of how our web app extends beyond the traditional classroom. Throughout life, school teaches us how to calculate derivatives and analyze works of literature, but fails to give us the foundation for real world education. We believe that by promoting formal writing practices and increased accessibility through Speech to Text, we are in a sense promoting a social good for students to prepare for the next chapter in their lives.
In fact, after we finished this question, we ran our answers through Auxilio, and we were very proud to discover that Auxilio identified mistakes in our responses that we did not catch.


## What we learned

We learned the benefits and drawback of using PHP. We learned how all these languages communicate with one another to create one functional product. Finally, we were able to learn how a hackathon works. Since this was our very first one, it was a great experience to see everyone working in their own teams but also interact to help one another.

## What's next for Auxilio

Beyond just a web app, we want to write a Google Docs and Google Chrome plugins to make our product more accessible. We also want to expand our slang term database as well as refine our grammar checking service.
