<?php

namespace App\Http\Controllers;

class VariableController
{
    public array $images = [
        "man-working.jpg",
        "man-working.jpg",
        "Girl-reading.jpg",
        "taxis-in-traffic.jpg",
        "taxis-in-traffic.jpg",
        "dog-lake.jpg",
        "dog-lake.jpg",
        "women-camera.jpg",
        "women-camera.jpg",
        "football-stadium.jpg",
        "football-stadium.jpg",
        "beach-family.jpg",
        "beach-family.jpg",
        "airplane.jpg",
        "airplane.jpg",
        "woman-presentaion.jpg",
        "woman-presentaion.jpg",
        "kids-holding-hands.jpg",
        "kids-holding-hands.jpg",
        "taxi-parked.jpg",
        "taxi-parked.jpg",
        "church-mountain.jpg",
        "church-mountain.jpg",
        "building-crane.jpg",
        "building-crane.jpg",
        "woman-under-Tree.jpg",
        "cyclist-city.jpg",
        "cyclist-city.jpg",
        "bikers.jpg",
        "bikers.jpg",
        "car-oil-top-up.jpg",
        "car-oil-top-up.jpg",
        "chef-cooking-flames.jpg",
        "chef-cooking-flames.jpg",
        "child-upset.jpg",
        "child-upset.jpg",
        "child-with-bubbles.jpg",
        "child-with-bubbles.jpg",
        "diving-into-water.jpg",
        "diving-into-water.jpg",
        "dr-nurse-computer.jpg",
        "dr-nurse-computer.jpg",
        "elderly-lady-preparing-food.jpg",
        "elderly-lady-preparing-food.jpg",
        "friends-celebrating-wine.jpg",
        "friends-celebrating-wine.jpg",
        "friends-talking-over-coffee.jpg",
        "friends-talking-over-coffee.jpg",
        "girl-gig.png",
        "girl-gig.png",
        "girl-in-record-store.jpg",
        "girl-in-record-store.jpg",
        "hitchhiker-forrest.jpg",
        "hitchhiker-forrest.jpg",
        "horse-rider.jpg",
        "horse-rider.jpg",
        "HotAirBalloon.jpg",
        "lighthouse.jpg",
        "lighthouse.jpg",
        "man-hat-fishing.jpg",
        "man-hat-fishing.jpg",
        "man-podcasting.jpg",
        "man-podcasting.jpg",
        "man-shopping-snacks.jpg",
        "man-shopping-snacks.jpg",
        "old-man-painting.jpg",
        "old-man-painting.jpg",
        "online-purchases-credit-card.jpg",
        "online-purchases-credit-card.jpg",
        "playing-chess-in-park.jpg",
        "playing-chess-in-park.jpg",
        "Rhino.jpg",
        "young-man-and-dog.jpg",
        "young-man-and-dog.jpg",
        "run-at-sunset.jpg",
        "run-at-sunset.jpg",
        "safari-elephants.jpg",
        "safari-elephants.jpg",
        "skateboarder-bowl.jpg",
        "skateboarder-bowl.jpg",
        "snowboarding-melon-grab.jpg",
        "snowboarding-melon-grab.jpg",
        "surfer-in-board-shorts.jpg",
        "surfer-in-board-shorts.jpg",
        "airport-flights-destination.jpg",
        "airport-flights-destination.jpg",
        "alley-night-cobbles.jpg",
        "alley-night-cobbles.jpg",
        "alpine-village.jpg",
        "alpine-village.jpg",
        "arm-wrestling-gamble.jpg",
        "arm-wrestling-gamble.jpg",
        "audience-gig.jpg",
        "audience-gig.jpg",
        "auditorium-empty.jpg",
        "auditorium-empty.jpg",
        "axe-camping.jpg",
        "axe-camping.jpg",
        "band-crowdsurf.jpg",
        "band-crowdsurf.jpg",
        "band-saxaphone.jpg",
        "band-saxaphone.jpg",
        "barber-shop.jpg",
        "barber-shop.jpg",
        "beach-empty-paradise.jpg",
        "beach-empty-paradise.jpg",
        "blizzard-walking.jpg",
        "blizzard-walking.jpg",
        "breakfast-buffetjpg",
        "breakfast-buffetjpg",
        "brushing-teeth-bathroom.jpg",
        "brushing-teeth-bathroom.jpg",
        "building-construction-birds.jpg",
        "building-construction-birds.jpg",
        "camp-cooking-tent.jpg",
        "camp-cooking-tent.jpg",
        "campfire-camping.jpg",
        "campfire-camping.jpg",
        "camping-sunrise-woods.jpg",
        "camping-sunrise-woods.jpg",
        "cards-gambling.jpg",
        "cards-gambling.jpg",
        "carnival-swing.jpg",
        "carnival-swing.jpg",
        "cat-cleaning-knuckles.jpg",
        "cat-cleaning-knuckles.jpg",
        "chef-smelling.jpg",
        "chef-smelling.jpg",
        "city-beach-lights.jpg",
        "city-beach-lights.jpg",
        "cocktail-cheers.jpg",
        "cocktail-cheers.jpg",
        "giraffe-feeding.jpg",
        "giraffe-feeding.jpg",
        "girl-elephant.jpg",
        "girl-elephant.jpg",
        "grafitti-suburbs.jpg",
        "grafitti-suburbs.jpg",
        "green-fields-sky.jpg",
        "green-fields-sky.jpg",
        "hallway-staircase.jpg",
        "hallway-staircase.jpg",
        "hands-knitting.jpg",
        "hands-knitting.jpg",
        "highway-city.jpg",
        "highway-city.jpg",
        "horseback-riding-lane.jpg",
        "horseback-riding-lane.jpg",
        "hotel-rooftop-pool.jpg",
        "hotel-rooftop-pool.jpg",
        "house-build-construction.jpg",
        "house-build-construction.jpg",
        "house-grey-storm.jpg",
        "house-grey-storm.jpg",
        "indian-girl-window.jpg",
        "indian-girl-window.jpg",
        "japan-crossing-night.jpg",
        "japan-crossing-night.jpg",
        "kitchen-restaurant-man.jpg",
        "kitchen-restaurant-man.jpg",
        "lady-sing-microphone.jpg",
        "lady-sing-microphone.jpg",
        "lake-jump.jpg",
        "lake-jump.jpg",
        "london-flags-cab.jpg",
        "london-flags-cab.jpg",
        "make-up-brush.jpg",
        "make-up-brush.jpg",
        "man-cart-rain.jpg",
        "man-cart-rain.jpg",
        "man-hiking-jump.jpg",
        "man-hiking-jump.jpg",
        "man-piano-park.jpg",
        "man-piano-park.jpg",
        "manor-house-garden.jpg",
        "manor-house-garden.jpg",
        "night-camera-woman.jpg",
        "night-camera-woman.jpg",
        "park-trees-walk.jpg",
        "park-trees-walk.jpg",
        "people-protest.jpg",
        "people-protest.jpg",
        "pool-cocktails-holiday.jpg",
        "pool-cocktails-holiday.jpg",
        "rain-street-canal.jpg",
        "rain-street-canal.jpg",
        "rainbow-fields-clouds.jpg",
        "rainbow-fields-clouds.jpg",
        "river-boat-trees.jpg",
        "river-boat-trees.jpg",
        "Santorini-caldera.jpg",
        "santorini-white-houses.jpg",
        "santorini-white-houses.jpg",
        "siamese-cat-lounging.jpg",
        "siamese-cat-lounging.jpg",
        "snow-street-winter.jpg",
        "snow-street-winter.jpg",
        "storm-lightening-town.jpg",
        "storm-lightening-town.jpg",
        "street-painter-apron.jpg",
        "street-painter-apron.jpg",
        "Subway-brooklyn-empty.jpg",
        "sunset-beach-games.jpg",
        "sunset-beach-games.jpg",
        "surgery-green-scrubs.jpg",
        "surgery-green-scrubs.jpg",
        "teacher-projector.jpg",
        "teacher-projector.jpg"
    ];




    public $rst = [
        "Let me tell you about a language I’ve always wanted to learn,
 which is French. Obviously,
 it’s spoken in France,
 but also in many other countries which have been influenced by France including places like Canada and Belgium. I’ve heard that it’s quite a difficult language to learn because the pronunciation is very unique,
 but I can speak Korean and I enjoyed practicing its pronunciation so I might be ok with French. The reason I would like to learn French is that the fashion industry is huge and there are lots of jobs. I have actually been to France before so I know from experience that a lot of French people can’t speak English very well,
 so that’s another good reason to learn their language. The only problem is I’m already thirty years old and I’ve spent more than fifteen years learning Korean. I don’t know if I would ever be able to learn French fluently because it’s a difficult language for anyone to learn,
 especially someone older like me. But it would be really fun to try.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST2.mp3",

        "Talk about a book you read recently. What was it about? How did you first hear of it? What did you like or dislike about it?",

        "A book that I’ve read recently,
 which really inspired me,
 was called “Surely You’re Joking,
 Mr. Feynman” by the famous physicist Dr. Feynman. This book is a collection of personal stories from Dr. Feynman's life. The stories are both hilarious and thought-provoking. This book is mainly about all the life lessons that Dr. Feynman learnt in his amazing life. For instance,
 do things that you love as best as you can. Each chapter covers one important part of his life,
 such as his time at university or the time he met Albert Einstein. Turning to the next question,
 the first time I heard of this book was on a podcast where two people were talking about the most influential books that they’ve ever read. Even though I hadn’t heard of Dr. Feynman then,
 the way they talked about the him was inspiring. I liked that this book was a biography,
 and I was able to learn about this fascinating man through his own stories.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST5.mp3",

        "Describe a major decision you have taken in your life. What was the decision? Why did you make that decision? Was the decision a good one?",

        "A really important decision I’ve made recently is to study abroad,
 which is the reason I’m here now. No one from my family has ever had the chance to study abroad before. My parents were actually hoping I’d start working for our family textile business as soon as I graduate. I think it’s too soon to join the family business though. I really want to study marketing – especially fashion marketing – and English so I can sell our company products to buyers all over the world. If I study fashion marketing in the UK,
 I can learn how to do business in the fashion industry,
 which is of course very competitive and fast-moving. As for whether it was the right decision,
 I’m pretty confident it was and I can’t change my mind now anyway because I borrowed money from my parents to pay for my tuition. I’m going to do my best to finish my course and I will go back to my country with new ideas that will help expand our business. All I need now is to get a good English score. So,
 anyway,
 that’s an important decision in my life.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST6.mp3",

        "Describe something you do to forget about work or study. What is the activity? How often do you do it? How does it help you to forget?",

        "I’d like to talk about horse riding,
 which has been my hobby since I was around ten years old. I’m actually the joint owner of a horse with two of my friends and we take turns looking after him,
 cleaning out the stable,
 and so on. I don’t have a part-time job so I spend most of my weekends at the stable. Taking care of a horse is quite a dirty business so it’s obviously very different from studying at college. That means I can forget about my classes during the week when I’m at the stable on the weekend. There’s quite a large field next to the stable and I just get a wonderful sense of freedom when I’m riding around on my horse. College seems a million miles away! Do I think other people would enjoy horse riding? Yes,
 absolutely. I think everyone should give it a try. Horses are absolutely wonderful animals,
 very gentle and intelligent. If you ever have the chance to ride a horse,
 you should definitely give it a try.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST7.mp3",

        "Describe a polite person you know. Who is the person? What is this person like? Why do you think he or she is polite?",

        "I’d like to describe a very courteous person I know. This person is a male friend of mine. I got to know him a few years ago when I was introduced to him by another friend of mine. I’d describe him as a very friendly person and have always found him to be very considerate of other people. He is also very generous and he often tries to help people if he can see that they are doing things tough. For example,
 he likes supporting a lot of small businesses in his local area because he knows their businesses are struggling right now. He will also often buy something for you that he knows you need at the shops to save you having to go to the shops yourself. Just the other day he bought me a bag of oranges when he was down at the shops because he knows I like oranges. Another reason why I think he is polite is that he is a very considerate host. He is an extrovert and always likes meeting new people too and often he will invite them back to his place. He will offer them something to eat or drink upon entering his house. He also likes to make sure you are comfortable and will always ask you if you are too hot or cold. If you are,
 he will adjust the temperature to your liking. Overall,
 I’d say he’s the most polite person I’ve ever met.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST8.mp3",

        "Describe a live sports match that you have watched. What was it? Why did you watch it live?",

        "I’d like to describe a live sports competition I watched a few years ago. A few years ago,
 I watched a live Rugby game that I really enjoyed. The event was held in Japan where I lived for a number of years,
 and I’m a mad rugby fan so I was especially interested in this game. I went to this game with a friend who was also a keen rugby fan and we had been looking forward to this game very much in the week before kickoff. We knew the bar would be full so we made sure we got there several hours early so we could get a good seat that had a good view of the game. The game was streamed live on TV in a bar in my local area. We were lucky as we were able to get a good seat in front of the biggest TV screen in the bar. The bar was bursting at the seams and there were people there from many countries,
 especially people from the UK and Australia. The noise at times was deafening. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST9.mp3",

        "Describe an art exhibition you have seen. When did you go there? Where was it? What was it like?",

        "I’d like to describe an art display I’ve seen. A couple of years ago I went to a local art exhibition at an art gallery in London with a friend. At the gallery,
 many local artists displayed their works and there were many people there viewing the art. Many of the artworks were paintings by young artists trying to make it as an artist. There was a stark contrast of styles of paintings too. Some of the paintings featured bright daylight scenes,
 others were of night scenes. Some also featured heavy shadows set against a bright backdrop of either bright street light or bright sunshine. The art gallery was quite full of people,
 and everyone who entered was well dressed as there was a dress code. Many people viewing the art seemed like they were quite wealthy and from a higher social class. Inside the art gallery,
 it was very modern and dark and all of the art pieces were displayed on walls with special lighting surrounding each piece to bring out the best features of every painting. In general I felt it was a very eye-opening experience even though I didn’t end up buying any paintings.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST10.mp3",

        "Describe a skill that you can teach to others. What is the skill? When did you learn it? How can you teach it?",

        "I’d like to describe how I can teach people how to swim. I learned this skill in elementary school where it was compulsory for all the students in my school from grades four and upwards to be able to swim one hundred meters. Regarding how I would teach this,
 off the top of my head,
 I would start by getting them to work on their kicking action. To do this I would tell them to place the upper part of their body onto a paddleboard and get them to try to propel themselves forward using the torpedo kick which I would teach them. While they are doing this I would make sure they are moving forward in the water as straight as possible. Once I could see their kicking action and their arm strokes were good I would then take the paddleboards away from them to see if they could swim one length of the pool using the correct kicking action and arm stroke.  I would then tell them to do one length of the pool by using the correct kicking action and arm strokes. I think everybody should learn how to swim,
 mainly because learning how to swim well could save your life if you were to ever find yourself in trouble in the water. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST11.mp3",

        "Describe a time when you told your friend the truth. Who was your friend? What was the truth? What was your friend's reaction?",

        "I’d like to describe a time I gave a friend of mine a reality check about being rich. I have a friend who thinks that money will buy him happiness. I met this friend about twenty years ago and ever since I first met him he’s always tried so hard to make money and he never stops talking about it.  I have always noticed he has never been very successful at this so one day I asked him if he liked what he was doing every day to,
 which he said no. I said back to him,
 think about this carefully. You’re spending all day,
 every day,
 doing something you don’t like in order to try to make money which will probably not bring you much happiness at all in the long term. My friend’s reaction was to try to justify making a lot of money by saying it buys you complete freedom which I agreed was true. Then I said to him,
 money can’t buy you love or friends or family,
 it also can’t make people like you and it certainly won’t buy you peace of mind. I also said accumulating expensive things won’t make you happy either as they will only bring you temporary satisfaction. In fact,
 if you have a lot of money you will probably only become greedier and want more when you already have more than enough. In the end,
 having a lot of money will bring you some stress relief but it will not solve all your problems in life. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST12.mp3",

        "Describe a piece of international news you recently heard. What was it about? Where and when did you hear it?",

        "I’d like to talk about a peice of news that  I heard recently about the coronavirus. In the news story,
 there were reports of a new strain of the coronavirus called,
 which is apparently about seventy percent more contagious than the original strain. In many major countries of the world,
 this new strain of the virus is taking hold. These countries according to the news report are having to go ask people to stop going to work to try to reduce the numbers of people getting it. I heard it about four weeks ago. Actually,
 I read a news report about it and then watched a short video news story about it on my smartphone. The news story made me a little bit depressed because it seemed to me that this virus was not going to go away anytime soon I thought. Even though I was encouraged to read an earlier news report that said the vaccinations were beginning to be given to people all throughout the world,
 I also wondered how long that would take. I think it will be quite a long time before the world gets back to normal again. I hope that things will become much better in the future for everyone all around the world and that the world will be a better place after this is all over.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST13.mp3",

        "Describe a time when you needed to use your imagination to achieve something. When was it? Why did you need to use your imagination?",

        "When I was in my school,
 I had to attend a storytelling class. The class was great,
 but I had trouble as I was told to narrate a story.  I had to imagine an entire story and it was extremely difficult for me. I  had to tell stories and use my imagination to develop them. I needed to use the imagination for creating a fictional story plot. Most of the time,
 I used to tell stories about aliens and their activities. Actually,
 at that time I did not have any clear idea about aliens. But I pretended that I knew a lot of information about the aliens. I generated the ideas from the other storybooks about the aliens that my dad bought me marking my birthday. But I could not directly tell the stories from the book that I read before. Hence,
 I applied my imagination.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST14.mp3",

        "Describe a time when you changed your opinion. When was it? What was your opinion? Why did you change it?",

        "I’d like to talk about a time I changed my opinion about a restaurant. A few weeks ago a friend of mine told me he’d discovered a new place in my local area that severed the best food he’d ever eaten at a reasonable price.  I immediately believed him because I’d always thought he was a good judge of food. At the restaurant,
 I ordered the same dish as him. Initially,
 after I finished it I thought it was amazing! Everything was so delicious. So I gave it the thumbs up. Because it was so good the next week I went there again with my mom. I ordered the same dish but this time it was awful. All the food had been overcooked and the waiter was so rude to us. So I have a completely different opinion about that restaurant now. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST15.mp3",

        "Describe an old friend that you got in touch with again. Who is he or she? What is he or she like? How did you get in contact?",

        "I’d like to describe an old friend I got in contact with again recently. This person was a British guy who I’d met in Japan many years ago. I knew this person in Japan he was an English teacher working at the same company as I used to work at. I’d always thought he was a good friend because he’d always been social and easygoing in the past. I hadn't seen him for over five years when I got an email from him out of the blue. He said that he was coming to my hometown and wanted to meet me. We had a nice dinner together and talked about our time in Japan. It was really great to see him again,
 and I am really glad we got in touch again. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST16.mp3",

        "More and more people from wealthy countries go abroad to volunteer. What are the advantages of this trend?",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST17.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST18.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST19.mp3",

        "So much has changed for the news industry since the rise of the internet. However,
 I agree that newspapers still have importance. The main advantage of the printed newspaper is that it does not require any technical ability to read. This offers the reader a high level of flexibility. The printed newspaper can be read in any place at any time. For instance,
 a person may read the paper while commuting to and from work. Secondly,
 the reader can absorb the information offered at his own pace. What is more,
 the level of importance of each news story is made more obvious by the use of different headline fonts. For these reasons,
 I believe that printed newspapers are still relevant today.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST20.mp3",

        "What are the advantages of tourism?",

        "I think that tourism has many advantages for developing and developed. The most important advantage is that tourism is an industry that contributes to the economy of a country. For instance,
 locals may find new employment opportunities because tourism creates lots of jobs such as tour guides,
 shop assistants,
 and waiters and chefs in restaurants. Secondly,
 tourism creates awareness about the culture of a country. It helps educate visitors from other countries about the local heritage and history thus making the host country more well-known. In the long run,
 this can bring huge benefits to a country. There are a lot of reasons why tourism can bring advantages to a country,
 and these were some of them.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST21.mp3",

        "Do you like reading? What kind of books do you enjoy? Why?",

        "Yes,
 I love reading because it is probably one of the most beneficial activities I  do. The first reason why reading I enjoy reading is because it increases my knowledge. It fills my mind with new facts,
 new information,
 and new ideas that make me better at conversations as I always have something interesting to talk about. on top of that,
 it is a well-known fact that reading frequently improves your vocabulary. The more you read the more words you will be exposed to,
 which will improve your ability to articulate your thoughts more effectively. Personally,
 I enjoy reading fantasy books like Harry Potter because they're enjoyable to read and I can easily bond with the characters. I think reading consistently has benefited my life in so many different ways.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST22.mp3",

        "Yes,
 overall I think that modern technology such as smartphones has made us more social. The invention of online social media sites,
 such as Twitter and Facebook,
 has dramatically reduced the need to have face-to-face interactions,
 and this has been very helpful especially since the Coronavirus pandemic hit the world. Through these social apps,
 people can easily keep in touch and communicate with whoever they want,
 close friends or total strangers,
 from anywhere in the world. Actually,
 I have experienced this because since last year I have been learning from a Japanese teacher who lives in Tokyo on webcam from my home in Germany. It's amazing that I have this opportunity thanks to modern technology. Another reason why I think technology has made us more social is that people can share any type of news,
 information,
 and photos with their loved ones in an instant keeping a feeling of closeness. To wrap up,
 I firmly believe technology has made everyone in this world more social. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST23.mp3",

        "Nowadays more and more people live non-active lives. Why do you think this is? What are the problems associated with this?",

        "Living a non-active life is becoming more and more common these days even though there are a large number of sports facilities and government campaigns. The main problems caused by an inactive lifestyle are obesity and back pain. It's a well-known fact that long periods of physical inactivity raise the risk of becoming overweight and obese. This is because you burn fewer calories and easily gain weight when you don't move or exercise often. Also,
 posture and back problems are associated with leading a non-active life. Sitting for long periods causes serious back pain,
 and this can have long-lasting problems. All in all,
 leading a non-active lifestyle causes a lot of health problems,
 including obesity and spinal diseases. I suggest people start exercising and going outside more often. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST24.mp3",

        "Global warming is one of the biggest threats humans face in the 21st Century. What problems are associated with this?",

        "Global warming is certainly the biggest issue facing humanity this century. The biggest worry I have is the rising ocean levels because I live near the sea. The most concerning problems caused by climbing sea levels are that land is being lost and peoples’ homes are often flooded. As water levels rise,
 low-lying land is submerged and many countries become smaller. On top of all that,
 millions of people all over the world live in coastal areas,
 and if the sea rises by even a few feet,
 they completely lose their property. Another major problem is air pollution. Nowadays many big cities all over the world have major air pollution problems and this could lead to residents of those cities becoming seriously ill as they get older. Global warming is certainly the biggest threat to humans in the 21st century. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST25.mp3",

        "Describe a museum that you have visited. Where was it? What did you see?",

        "I have visited more than ten museums in total in different countries and I loved them all. I mostly enjoyed visiting the British Museum in London. I went to the museum almost two years ago while I was in England to learn English. There are five floors in the museum and the interior of the building reminded me of the imperial age. I remember seeing the ceiling of the building from the ground floor. The museum was packed with people from different age groups and nationalities who were closely observing the museum,
 and I had a feeling that most of them were enjoying it. I see historical artifacts from all over the world but mostly from ancient Europe. Taking photos was prohibited but I was sometimes able to take some nice photos. I definitely would love the chance to go back there one day.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST26.mp3",

        "Many young people think that choosing their career is the most important decision in their lives. Do you agree that choosing a career is the most important decision a young person has to make? Why or why not?",

        "I mostly agree that choosing a career is the most important decision young people need to make. The main reason is that by having a clear career path they want to pursue,
 young people can make better decisions about their education and even their major at university. Thinking back to my life,
 I didn't have a clear path and now I regret the major I chose. Many lines of work require specific degrees and certifications,
 which can take years to obtain. So,
 by understanding the requirements of their chosen path they can prepare themselves better for the career they want. For this reason,
 I agree that choosing a career is the most important decision young people need to make.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST27.mp3",

        "Describe a new skill you learned recently that you think is important. What is it? How difficult was it to learn? How did you learn it?",

        "I recently learned to cook. I used to hate cooking,
 and while I could make a few basic things,
 I wasn’t really any good at it. Honestly,
 I'd never taken any cooking lessons nor followed recipes correctly,
 so it's no wonder I was bad. I’ve always been a fan of taking classes online,
 so last month I thought it would be good for me to take an online cooking course. So I did some research,
 got out my credit card,
 and paid for a class I thought was going to be worth it. Former students had written fantastic reviews about it and so I was excited to begin the class. The teacher went through all the basics,
 from the essential equipment that all home chefs need,
 to basic knife skills. Every class left me more and more confident. Over the past month,
  I have started to experiment and making increasingly complex dishes. I can’t say everything has been a success,
 but that one online course has really helped me to make nice homemade food for my family. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST28.mp3",

        "Is there a job that you would not like to do in the future. What is the job? Why do you think it is undesirable?",

        "Nowadays,
 there are ample choices available in the market when it comes to career options. If I had to choose one particular job among many that I would not like to do,
 I suppose it would be a sales job. Once I worked as a salesman for a computer company,
 and I really hated it.  When I work in the sales department for that company as an intern. Initially,
 I was very enthusiastic about calling people and selling them the computers. But right away I figured out that it was an incredibly stressful job for me. I'm an introvert,
 so meeting lots of strangers every day makes me very anxious.  I have a lot of respect for sales workers,
 especially successful ones. They have a lot of determination and patience for their job. But I believe I don’t have the skillset or personality for a sales job in the future.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST29.mp3",

        "What festivals are celebrated in your country? Why are they important?",

        "There are many festivals in my country but the most popular one is Chinese New Year. This is the occasion that people celebrate with great joy,
 hope,
 and festivity with their beloved ones. It is often celebrated with fireworks and people send each other their best wishes for an awesome year ahead. Many people believe that red is considered the lucky color for the new year. That’s why people often choose to dress in vivid color as a way to eliminate bad luck and welcome good things. My country also has some unique traditions like lucky money,
 preparing homemade food,
 or decorating home in the first days of the year. It is also a good time for family reunions and New Year resolutions.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST30.mp3",

        "Do you think school students should get grades? Explain your reasons.",

        "In my opinion,
 students must work as hard as possible when they are at school,
 and I believe that a good way to motivate and encourage students is to give them grades for each subject. To start with,
 in my opinion,
 students are more likely to learn a school subject when they know they are being graded. If students have the opportunity to earn grades,
 they spend more time working hard on assignments to get that good grading,
 which results in them gaining more knowledge. Another reason is that grades allow students to measure their progress and their successes and failures. This can motivate students who do well by rewarding them and also encourage students who do badly to work harder at school. To wrap up,
 I strongly believe that grades are a good way to motivate and encourage students to learn better at school.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST31.mp3",

        "What school subjects do you think are the most important to study? Why do you think so?",

        "I think it is very important for school students to study math and science than it is to study other subjects like humanities and art. The main reason that I think this is that science and math are more valuable subjects to learn because they are essential subjects to understand and advance technology. I believe that technology such as the internet,
 smartphones,
 and electric cars are all inventions that people use every day and would not be possible without students of math and science inventing them. We need students to keep becoming math and science experts so that they can invent the technology of the future. Another reason I think math and science are the most important subjects is that people need to know them to save lives. Doctors and nurses are all former students of science and math. We need experts in these subjects to make medicine for us and think of ways to cure serious diseases like cancer. For these reasons,
 I believe studying science and math is much more important than learning about other subjects. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST32.mp3",

        "Talk about something you did that you didn't enjoy. What was it? Why did you do it? Would you do it again?",

        "I agree that is it important for people to do things that they don't enjoy because it helps to build strength and character. One time I did a bungee jump,
 and I absolutely hated it because I'm terrified of heights! However,
 I am really glad that I did it. Even though it was tough,
 I think it helped me become a braver and stronger person. Moving on to the last question,
 I don't think I would do it again but I would try something similar such as rock climbing or maybe even sky diving! All in all,
 it was a great experience that has certainly helped me build strength and character.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST33.mp3",

        "Do you believe money equals success? Why or why not? What else can lead to success?",

        "There is no doubt that money has become a major part of our modern lives,
 but I don't consider it to be the only measure of success. First of all,
 each person can be successful in their own way. Some people earn success through money while others earn success through hard work and respect. For example,
 I consider my father to be very successful even though he doesn't have a lot of money because he is deeply loved by all his friends and family. Also,
 many social workers,
 musicians,
 artists,
 scientists,
 and writers have been successful in their life because of their contribution to society regardless how much money they earned. To wrap up,
 I believe that success is about fulfillment and not how much money you earn. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST34.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST35.mp3",

        "Do you think parents should help their children with their homework? Why or why not?",

        "In my opinion,
 all parents should help their children with their homework for several important reasons. Firstly,
 since children find it difficult to grasp every subject taught in the class,
 parents should be available to offer extra support to their children especially in terms of helping them with their homework. In my way,
 when I was in school,
 I always found my science homework really difficult,
 and I was very lucky that my dad helped me with it each week. My dad taught me a lot about science while helping me with my homework. On top of that,
 most parents are aware of the many requirements that the school teachers have to deal with. Therefore,
 helping their own children with their homework would not only help their children but also assist the teacher. So,
 all in all,
 I think that parents should be involved with their children's education and this involves helping them with their homework.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST36.mp3",

        "What factors contribute to happiness at work or school?",

        "Happiness at work or school has become an important factor nowadays for many employees and students,
 and there are several factors that can make someone happy at work or school. Firstly,
 employees and students feel satisfied when they receive recognition for the effort put into work. This will make them know that their bosses or teachers are paying attention to them and value their hard work. Workers will be more motivated and satisfied if they believe that their work is being appreciated. Moreover,
 being rewarded for hard work is a major factor in job satisfaction. In school,
 getting good grades or at work receiving a pay rise that reflects the quality of work are ways schools and companies can reward students and workers.  In sum,
 several factors contribute to job satisfaction. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST37.mp3",

        "What effects does pollution have on animal life and humans society?",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST38.mp3",

        "I believe that advertising is essential for convincing consumers to buy particular products. Nowadays,
 companies are using a wide variety of marketing techniques to make us buy their products such as using celebrities or social media influencers to promote their products. Moreover,
 some companies reach their target audience with the help of sophisticated technological advancements such as email newsletters and social media promotions to increase their customers and make more sales. Therefore,
 I think advertising still has a vital role to play in persuading people to buy products.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST39.mp3",

        "Describe a time when you were faced with problems or stress. What was the problem? How did you overcome it?",

        "At my last job,
 I was in charge of planning the company's summer party. I had to do a lot of things like finding a venue and getting everything ready for all workers. I booked the venue and all the extra things we needed,
 but then a week before the party the venue I had booked in advance canceled our agreement. I was so stressed because I had no idea how to find a new venue at such short notice. Luckily,
 my colleague recommended a hotel that we could use as the venue. I called them right away and I was able to book a party hall. Thankfully,
 the party went without any problems and everyone had a great time. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST40.mp3",

        "Describe an experience that made you appreciate our natural world. What was it? Why was it special?",

        "A few months ago,
 I had a minor accident which meant that I had to stay in the hospital for a week. During that week I visited the hospital garden almost every evening. There was a group of senior citizens who checked every tree and plant in that garden. When I asked for the reason,
 the old man asked me a simple question “Do you check for the well-being of your mother?' I replied “every day”. The old gentleman smiled and said,
 “ I am also doing the same thing”. From that day onwards I started respecting nature a lot more. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST41.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST42.mp3",

        "Describe your greatest accomplishment at work or school. What was it? Why was it special?",

        "In my last job,
 I managed all the social media accounts. One day,
 I noticed that some other brands that we were competing with were experimenting with videos and getting a fantastic response from their customers,
 so I asked my boss if I could do so a test using similar videos. She agreed,
 so I produced a video by myself that doubled the number of likes and followers we normally saw on all our social media channels! It also encouraged many of the viewers of the video to visit our website within a week of seeing the video,
 which made me feel very proud. After that,
 I got promoted to be the head social media marketer at the company. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST43.mp3",

        "Describe a time you felt under pressure. How did you manage that?",

        "Throughout my working career,
 I have figured out how to handle being under pressure. One time,
 I was supposed to deliver a project to a client in five days. I was working on this with my coworker,
 but he got sick and had to take a few days off work. While I felt shocked and stressed at first,
 I tried to look at it differently and see it as an opportunity. Instead of getting stressed,
 I came up with a very detailed plan that enabled me to finish the project the time.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST44.mp3",

        "For me,
 beauty is two things; personality and appearance. A physically attractive person has outer beauty such as a pretty face and a healthy body. A beautiful personality comes from within us. I think someone who has a beautiful personality is someone who is kind,
 funny,
 and generous. These people feel beautiful because they have an attractive and wonderful soul. Your skin,
 body,
 hair,
 and smile contributes to your outer beauty while your soul,
 thoughts,
 and character define your inner beauty. I think my mother is the most beautiful person I have ever met because she has both a beautiful character and appearance. I think that understanding the true definition of inner and outer beauty can give you a lot of joy in your life.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST45.mp3",

        "I believe that it is essential for workers to build friendships at their jobs for a few very important reasons. Firstly,
 if you have a lot of friends at work,
 I think it'll make your life happier at work. And it's a well known fact that happy employees make good workers. Similarly,
 if everyone in the office is friendly with each other,
 you can work better by being surrounded by a positive work environment. It is more important for those employees who work in teams because working with friends is easier than working with casual acquaintances. For these reasons,
 I think it is very important to make friends at your job.",

        "Even though I'm in my thirties now,
 I can remember my childhood friends very well. Maybe this is surprising,
 but we are actually still in touch because we follow each other on all our different social media channels such as Facebook,
 Twitter,
 and WhatsApp. My childhood friends were always very kind to me,
 and I hope I was kind and good to them as well. We used to play football and cricket together every Saturday in the park near my house. And thinking back to those times,
 they were really great. I'm lucky to have had the chance to be friends with those guys. Although we had a couple of small arguments,
 we always respected each other. I feel very grateful to my friends,
 and I hope we can stay in touch for the rest of our lives.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST47.mp3",

        "There are several good qualities all good friends should have. A good friend should,
 first of all,
 be trustworthy and honest. If you cannot trust someone,
 he cannot be your true friend. In addition to these qualities,
 a friend should be understanding and helpful so that he can help you when you face some troubles in your life. For example,
 if you need to borrow some money,
 a good friend would be willing to help without making you feel bad about the situation. I'm really lucky because my best friend has all of these qualities,
 and I know that I can always trust him to be there for me whenever I'm in trouble. So all in all,
 a good friend must have these qualities,
,
 trustworthiness,
 honesty,
 and be understanding.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST48.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST49.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST50.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST51.mp3",

        "One of my favorite advertising campaigns of all time was launched by the phone company Orange in England about 10 years ago. The aim was to persuade people to buy cinema tickets for midweek showings like on a Tuesday or Wednesday. But the advertisement instead featured a lot of famous actors and directors pitching their new and terrible movie ideas,
 which were then denied in funny ways. This campaign appealed to me as it was funny,
 clever,
 and entertaining. I find these kinds of advertisements a lot more engaging and impactful than simply telling me that a particular product is the best.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST52.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST53.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST54.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST55.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST56.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST57.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST58.mp3",

        "Last year,
 a friend of mine had a terrible accident. He was leaving home in a rush and accidentally fell down the stairs. What made it worse was the fact that he was all alone and no one could hear his calls for help. Fortunately,
 he had a phone on him and was able to call family and emergency services for help. After carrying him downstairs,
 the medical staff was able to put him in an ambulance and take him to the hospital. He had multiple fractures in his femur and had to spend a year in rehabilitation. Today he can walk again just fine.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST59.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST60.mp3",

        "One Summer evening,
 I was walking through the main shopping street in my city when I came across a person who needed help. It was a young man who seemed to have had too much alcohol and was in a great deal of pain. He had fallen over and injured his ankle. I was surprised no one had walked past him or heard his cries. He was alone and felt very cold since we must have been outside for quite a while. I quickly ran over and helped him call his family for help. And then helped him hobble over to a nearby bench. His family came to pick him up after a short time,
 and I never saw him again.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST61.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST62.mp3",

        "For thousands of years,
 there has generally been two main ways to study; alone or in the classroom. But these days,
 studying alone has become a lot easier and in some ways better thanks to the advent of new technologies. Personally,
 I prefer to study alone,
 either from books,
 videos,
 podcasts,
 audiobooks,
 or websites. I like to study this way because  I can rewind and study at my own pace. This allows me to really understand each new concept before moving on with the rest of the subject. Nevertheless,
 I also think teachers are an invaluable resource. So I think for best results,
 studying in the future will need to use a mix of both online and classroom teaching. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST63.mp3",

        "Bosses are an essential part of any work environment since they ensure work is done well and employees know what they need to do. But the long-term effects of a good or a bad boss on a workplace can be huge. For me,
 the most important quality of a good boss is that they are approachable and friendly. Good communication is vital to most businesses,
 so a boss you can ask questions to,
 or someone you can come to for help is a much better boss than one you’d rather avoid. I also think bosses need to be empathetic,
 capable,
 and hardworking,
 in order to inspire their employees. These are some important qualities that all good bosses possess. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST64.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST65.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST66.mp3",

        "The business world is moving at a rapid pace these days. Technology has played the biggest role in changing the nature of business. From vloggers to digital content creators and even small online retail store owners. I think in the future,
 younger people will mostly run small online businesses which focus on creativity. In addition to creativity,
 I also think there will be more opportunities to create new and interesting products as the world is getting smaller and more interconnected by the day. Individuals can now work directly with factories and make sales without needing to store or handle their own products. I think the future looks bright for small businesses. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST67.mp3",

        "People today are increasingly moving from rural areas to major cities for a variety of reasons. Better work opportunities and higher salaries are just two reasons for this. But there’s a lot more to consider before choosing a city to live in. For me,
 nightlife and entertainment are very important. Cheap,
 efficient transportation is also vital for being able to move around and enjoy the city. I also need access to parks and nature that I can visit on weekends such as mountains and beaches. Another important factor to consider is the cost of housing. Sadly,
 the cost of housing in so many of the great cities in the world today is just simply too expensive. To sum up,
 in my opinion,
 a great city has a good mix of things to do,
 places to go,
 and affordable housing.  ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST68.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST69.mp3",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST70.mp3",

        "Caring for our elderly relatives is a vitally important job and,
 these days,
 there are a range of views on whose responsibility this is. On the one hand,
 we wouldn’t be here if not for the hard work and sacrifice of our elderly relatives,
 so perhaps the responsibility should fall to their kids and grandkids. On the other hand,
 pregnancies are increasingly planned these days and children provide a lot of joy to parents. If young people need to work hard raising children for the betterment of society,
 perhaps the government should do more to take care of the elderly. This would give younger people more time to work and improve society and the economy. Overall,
 I think that most of the responsibility should be with the family. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST71.mp3",

        "In your country,
 is it important to have a meal together with your family? What are some of the eating customs? ",

        "During my early years,
 eating with the whole family was a daily tradition. Sometimes we would eat quietly in the dining room,
 while at other times we would eat in the living room while watching television. But,
 it was always preferable that we eat the same food and at the same time. This changed a little over the years,
 as our school and work schedules changed. However,
 one big tradition that never changes was our Sunday lunch. My whole family would get together and eat a delicious meal in a formal setting,
 using our best plates and cutlery. These days,
 as the family is further apart,
 we mainly save this tradition for Christmas.",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST72.mp3",

        "Talk about some of the eating customs in your country. Is it important to eat with other people like your family?",

        "Well,
 to be honest,
 in my country,
 it's not that important to have a meal together with your family. If they're outside or working,
 then you usually have a meal by yourself. In cases like these,
 it's not important to wait for someone to begin eating. That being said,
 if all your family members are at home,
 then we normally prefer to eat together. In the UK,
 where I live now,
 the only eating custom that I'm aware of is having a family lunch on Sundays. Usually,
 we all get together at someone's house or the local pub and enjoy a nice big lunch with meat,
 vegetables,
 and gravy. However,
 sadly this custom is not as popular with younger people nowadays. I hope this custom remains because I really love going to the pub with all my family on Sundays. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST73.mp3",

        "Yes,
 in my opinion,
 instant meals are a great invention,
 especially for those who don't have much time to cook,
 like me. In this fast-paced world that we're living in now,
 it’s so common to eat instant meals. In fact,
 I'm sure all of my friends eat instant meals quite frequently. These instant meals have many advantages,
 such as speed,
 affordability,
 and variety. That said,
 of course,
 they are not the same as freshly cooked meals. Freshly cooked meals are much healthier because they don’t contain preservatives or chemicals. All in all,
 there are both positives and negatives to instant meals; however,
 I think that they are improving people's lives because they're so easy to cook and this saves time. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST74.mp3",

        "I absolutely love watching all kinds of movies and television,
 and from my experience,
 they certainly influence our behavior in several ways,
 some good but some bad. The best influence is that movies and television are a fantastic way of reducing stress. For instance,
 when watching films,
 we can escape our problems for a little while and live in the world of the film. Another positive influence is that movies sometimes show positive ways to resolve problems we all face in real life. For example,
 I learned how to stand up to bullies from watching a TV show about that issue. On the other hand,
 there are of course some negatives. TV can make us lazy because it is so easy to watch it for hours and hours and not do anything productive. If you're not careful,
 you can easily waste a whole day,
 or even a weekend,
 just watching TV,
 and of course that's not a good way to live. So,
 all in all,
 while TV and movies should not be a way to hide from life,
 sometimes they can help us cope with stress and teach us things. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST75.mp3",

        "There are some obvious pros and cons of living in a city and living in the countryside. And,
 to be frank,
 I'm not sure which is better. I think children who grow up in the countryside seem to be more mature and independent. The skills they need in life develop faster because of the environment they're brought up in,
 and this has some obvious advantages. On the flip side,
 even though kids who grow up in big cities tend to be less independent,
 they have more career and educational opportunities. In an ideal world,
 most children would live in a city and visit the countryside frequently or vice versa. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST76.mp3",

        "In my opinion,
 some people do dangerous things because they lack adrenaline and excitement in their normal lives; actually,
 this is like me. Their lives are usually pretty uneventful,
 so they need to spice them up by doing things like extreme sports. I remember reading that scientists have found that an attraction to risk has a strong link to pleasure. For example,
 the research suggests that some people have higher dopamine levels when they take risks. This means that engaging in this kind of behavior gives them pleasure in both their mind and body. In my opinion,
 these are the main reasons why some people are attracted to dangerous and extreme sports. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST77.mp3",

        "I don't agree with this statement because I was mostly influenced by my mom and dad. I went to a bad elementary school where most of the children were not good students because they didn't have any motivation to study. However,
 I was different because my parents always pushed me to be better and to study more,
 and I was always ahead of the other kids in my class. Sometimes my friends joked that I was a nerd,
 which I was not. Although I knew it was a joke,
 it sometimes bothered me,
 but I tried not to care much. So from my personal experience,
 parents have the biggest influence on a child's success at school; however,
 I understand that this is not always the case as some children are heavily influenced by their classmates. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST78.mp3",

        "Thinking back to my experience with homework when I was in secondary school,
 I remember thinking that it was a useless waste of time because it seemed unimportant. However,
 when I stopped doing my homework,
 I began having some trouble at school and my school grades dropped. I simply couldn't keep up to date with what we were learning because I didn't have a reason to study. So,
 now I think that homework is a positive and productive element of learning as long as it is relevant and not pointless. ",

        "https:\u002F\u002Fres.cloudinary.com\u002Fdetready\u002Fvideo\u002Fupload\u002Fdescribe\u002FRST79.mp3",


    ];
}
