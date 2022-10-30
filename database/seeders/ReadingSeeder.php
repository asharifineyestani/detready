<?php

namespace Database\Seeders;

use App\Models\Readings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReadingSeeder extends Seeder
{
    public array $questionBank = [
        [
            "id" => "FITB1",
            "sentence" => "Baby you got me all [wrong], maybe I’m not at all down and out. I’m high and i’m in, don’t you [know] who I am? I’m the jaded one with pop insensitivity, when I finish struggling, we can make our [way] to the dance floor and stand like strangers in an elevator stuck [between] stories.",
        ], [
            "id" => "FITB2",
            "sentence" => "The Olympic Games is an important international event featuring summer and winter sports. Summer Olympic Games [and] Winter Olympic Games are [held] every four years. Originally, the [ancient] Olympic Games [were] held in Ancient Greece at Olympia. The [first] games were [in] 776 BC. They were held [every] four years [until] the 6th [century] AD. The first \"modern\" Olympics happened in 1896 in Athens, Greece.",

        ], [
            "id" => "FITB3",
            "sentence" => "Ronald Reagan was an American actor and politician. He [was] the 40th President of [the] United States [from] January 20 1981 to January 20 1989. He [was] the 33rd Governor [of] California [from] 1967 to 1975. Reagan [was] the 9th and 13th President [of] the Screen Actors Guild, [from] 1947 to 1952 and [again] from 1959 to 1960. Reagan was a movie and [television] actor before he began his career in politics.",

        ], [
            "id" => "FITB4",
            "sentence" => "A baseball uniform is a kind of clothing that baseball players wear. They [wear] this to [show] which [team] they play for. Most baseball [uniforms] have the names and [numbers] of players who [wear] them, usually on the [backs] of the uniforms, to [tell] the different [baseball] players [from] each other. Baseball shirts, pants, shoes, socks, caps, and gloves are [parts] of baseball [uniforms]. Most uniforms have [different] logos and [colors] to tell which team is which.",

        ], [
            "id" => "FITB5",
            "sentence" => "Baseball uniforms were first worn by the New York Knickerbockers Baseball Club in the 1800s. Their [uniforms] were pants [made] of blue wool, white flannel [shirts] and straw hats. Since then, [the] uniforms have gone [through] many changes. More [items], ideas, and many other [improvements] were added to baseball uniforms [over] the years. The [style] of baseball uniforms [also] changed, little [by] little over time.",

        ], [
            "id" => "FITB6",
            "sentence" => '',

        ], [
            "id" => "FITB7",
            "sentence" => "All penguins have a white belly and a black back. This [is] a type of [camouflage] to keep them [safe] when they [swim] because it makes them [blend] in with their [background]. When a [predator], looking from below, sees the white [belly] and wings of a [swimming] penguin, they can not [see] the penguin [well] because the light is [coming] from above. Additionally, when [seen] from above, the penguin's black back blends in with the dark water below. ",

        ], [
            "id" => "FITB8",
            "sentence" => "Physical exercise is recommended for management of mild depression [and] has a moderate [effect] on symptoms. It is [equivalent] to [the] use [of] medications or psychological [therapies] for most [people]. In older people, it does [appear] to decrease depression.",

        ], [
            "id" => "FITB9",
            "sentence" => "The term suburb commonly refers to an urban district on the outskirts of a city. The [process] of suburbanization [began] in the second quarter [of] the nineteenth [century]. The emergence of the [industrial] city at that [time] was spurred largely [by] developments in [transportation]. Before [then] the [typical] city had [been] a compact cluster of small [buildings]. People traveled primarily on [foot], and goods were moved by horse and cart.",

        ], [
            "id" => "FITB10",
            "sentence" => "Electrical engineering has many subdisciplines. Although [there] are electrical [engineers] who focus [exclusively] on one of [these] subdisciplines, many [deal] with a [combination] of them. Sometimes [certain] fields, such as electronic engineering and career engineering, are [considered] separate disciplines in their own right.",

        ], [
            "id" => "FITB11",
            "sentence" => "Astronomy is one of the oldest sciences. Ancient [people] used the positions of the stars to [navigate] and to [find] the best time to [plant] crops. Astronomy is [similar] to astrophysics. A related subject, cosmology, is [concerned] with studying the Universe as a [whole], and the [way] the universe has [changed] over time. Astronomy is [not] the same as astrology, the belief that the motion of the stars and the planets may [affect] human lives.",

        ], [
            "id" => "FITB12",
            "sentence" => "Under the Constitution, the House of Representatives has the power to impeach a government official, in effect [serving] as a prosecutor. The Senate then [holds] the impeachment [trial] except in the impeachment of a [president], where the chief justice [presides]. The president, [vice] president, and [all] civil officers of the United States are [subject] to impeachment; conviction means automatic [removal] from office.",

        ], [
            "id" => "FITB13",
            "sentence" => "Impeachment is a serious affair. It is perhaps the [most] awesome [power] of Congress. The House of Representatives is the [prosecutor]. The Senate chamber is the [courtroom]. The Senate is the jury [and] also the [judge], except in the [case] of a [presidential] impeachment trial, where the chief justice presides. The final penalty is [removal] from office.",

        ], [
            "id" => "FITB14",
            "sentence" => "India’s economy became the world’s fastest growing in the G20 developing nations in 2014, [replacing] the People’s Republic [of] China. India’s [literacy] and wealth are also [rising]. According [to] New World Wealth, India is the seventh [richest] country in the [world] with a [total] wealth of $5.6 trillion. However, it still has many [social] and economic [issues] like poverty and [corruption]. ",

        ], [
            "id" => "FITB15",
            "sentence" => "Elvis Presley was an American singer and actor. He is [often] regarded [as] the most [influential] and most [famous] musician of the 20th [century] and is widely regarded as a [cultural] icon. He was [one] of the [first] and most [famous] in rock and roll music. He also [starred] in many movies. He is so [popular] that some people call him The King of Rock and Roll.",

        ], [
            "id" => "FITB16",
            "sentence" => "The British Museum in London is one of the world’s largest and [most] important [museums] of human history and [culture]. It [has] more than seven million objects from all [continents]. They illustrate and [document] the story of human [culture] from its [beginning] to the present. As with all [other] national museums and art [galleries] in Britain, the Museum charges no admission fee.",

        ], [
            "id" => "FITB17",
            "sentence" => "The FIFA World Cup is the most watched tournament in soccer. FIFA [organizes] the World Cup [every] four years. More [people] watch the World Cup finals [than] any other [sporting] event in [the] world—even more [than] the Olympic Games. The most [successful] team has been Brazil [because] they have won the competition five times.",

        ], [
            "id" => "FITB18",
            "sentence" => "Polar bear fur is made up of a layer of dense underfur and an outer [layer] of guard hairs, which [appear] white but are [actually] translucent. The [fur] keeps them very [warm]. Polar bears' [skin] is black. Therefore, they can [absorb] sunlight efficiently. They are [strong] and can [swim] very well. Polar bears are [similar] in size to a normal [bear] but have a slimmer neck, longer legs and thicker fur.",

        ], [
            "id" => "FITB19",
            "sentence" => "Facebook has been involved in many controversies over privacy. Some of these [controversies] have been [about] people being able to see personal [information] that other [people] post, and [others] are about [companies] and advertizers [being] able to see users’ [personal] information. Facebook sends ads [based] on a persons' gender, age, income, national origin, and sexual orientation.\n",

        ], [
            "id" => "FITB20",
            "sentence" => "5G is the fifth generation network of cellular mobile communications, first [launched] in March of 2019. 5G [uses] many new [technologies] that make it [faster] than 4G. 5G [currently] can get between]100 Mbit\u002Fs and 2 Gbit\u002Fs [depending] on the frequency that [is] used. It is eventually going to [replace] 4G.",

        ], [
            "id" => "FITB21",
            "sentence" => '',

        ], [
            "id" => "FITB22",
            "sentence" => "Minneapolis is a city in Minnesota. It is [next] to St. Paul, Minnesota. St. Paul [and] Minneapolis are [called] the Twin Cities [because] they are right next [to] each [other]. Minneapolis is the biggest [city] in Minnesota with [about] 370,000 people. People who live there [enjoy] the lakes, [parks], and river. The Mississippi River runs [through] the city.",

        ], [
            "id" => "FITB23",
            "sentence" => "Elizabeth II is the Queen of the United Kingdom, and the other Commonwealth [nations]. She [became] Queen when her father, King George VI, [died] on 6 February 1952. Since 9 September 2015, Elizabeth has [ruled] longer than any [other] king or queen in the [history] of the United Kingdom. She has also ruled [longer] than any other living king or queen in the [world].",

        ], [
            "id" => "FITB24",
            "sentence" => "Kangaroos hop to move around quickly and walk on two or four legs while moving [slowly]. They cannot [walk] sideways [and] cannot hop [backwards]. They can hop as far [as] about three [times] their own [height]. They [can] also swim when [necessary]. The kangaroo is a herbivore, [eating] mainly grass.",

        ], [
            "id" => "FITB25",
            "sentence" => "Lawrence is a city in the state of Kansas in the United States. It is in the north-eastern [part] of the state, [near] the Kansas City area. In 2010, 87,643 [people] lived [there]; though in 2019, there were an [estimated] 98,193 people. This [makes] it the sixth [biggest] city in Kansas. The University of Kansas [and] Haskell Indian Nations University [are] in Lawrence.",

        ], [
            "id" => "FITB26",
            "sentence" => "The iPhone is a series of smartphones made by Apple. It [does] many things that a [computer] can do but is small [enough] to fit in your [hand]. It is a [mobile] phone, meaning that it makes calls and [sends] text messages [without] wires. There are many [types] of iPhones, such as the model iPhone X.",

        ], [
            "id" => "FITB27",
            "sentence" => "On a baseball field, there are four bases. The [bases] form a diamond that [goes] around the [field]. The starting base [is] called home plate. First base is on the [right] side of the [field], second [base] is at the [top] of the infield, [third] base is on the left [side] of the field, and home plate is at the [back] of the field, where the catcher plays.",

        ], [
            "id" => "FITB28",
            "sentence" => "Country music has its roots and beginnings in folk music. The [old] cowboy [and] pioneer [songs] of the American frontier were [popular] in the [early] twentieth century, [and] so were arrangements [of] pop [music] songs by rural [performers]. Country [musicians] also adapted [new] musical instruments, like the Hawaiian steel guitar.",

        ], [
            "id" => "FITB29",
            "sentence" => "Vancouver is a coastal city and major seaport on the mainland of southwestern British Columbia, Canada. The [city] has a [population] of [over] 630,000 [and] is the [largest] city in British Columbia. Metro Vancouver [has] a [population] of [over] 2 million [people]. That makes it the third [largest] metropolitan area in Canada.",

        ], [
            "id" => "FITB30",
            "sentence" => "Online games are games usually on the internet to entertain people. They are usually [games] where you have to [control] a certain [person] or object to do something. Most [online] games use the [arrow] keys, space bar and other [keyboard] characters to control [the] person [or] object. These [can] be referred to as mini-games.",

        ], [
            "id" => "FITB31",
            "sentence" => "Jupiter can be seen even without the use of telescope. It [was] known to the [ancient] Romans, who [named] it after their god Jupiter. Jupiter [is] the third [brightest] object in the [night] sky. Only the Earth's [moon] and Venus are [brighter].",

        ], [
            "id" => "FITB32",
            "sentence" => "The idea of human rights originated from ideas found in religion and philosophy. The [modern] idea of human [rights] started during the [period] of the European Enlightenment. In the 16th [century], some people started [suggesting] that everyone had the religious and [political] right to choose their [religion] and their [leaders]. These [ideas] were also [important] in the American Revolution.",

        ], [
            "id" => "FITB33",
            "sentence" => '',

        ], [
            "id" => "FITB34",
            "sentence" => "The earliest records of beer were written around 7000 years ago by the Sumerians. It is [said] that th]e Sumerians [discovered] the fermentation process by [accident]. It is not [known] exactly how this [happened], but it could be that a [piece] of bread or grain [became] wet, and a short time [later], it began to ferment and made a [liquid] that caused people to [become] drunk.",

        ], [
            "id" => "FITB35",
            "sentence" => "The orchestral score of the opera was published in late 1899 by Casa Ricordi. In [contrast] to his other operas, Puccini [appeared] to be [satisfied] with his initial score, [which] remained relatively [unchanged] in the 1909 edition [prepared] by Osbourne McConachy. An unamended [edition] was published by Dover Press in 1991.\n",

        ], [
            "id" => "FITB36",
            "sentence" => "Most movies are made so that they can be shown on screen in cinemas and at home. After movies are [shown] in Cinemas for a [period] of a few weeks or [months], they are [shown] on television, or [sold] on streaming services like Netflix, so that [people] can [watch] the movies from the [comfort] of their home. ",

        ], [
            "id" => "FITB37",
            "sentence" => "Gorillas live in the rainforests in central Africa. They mostly live on the [ground], but they can also [climb]. When on the ground, they [walk] on their feet and [finger] knuckles. For [about] half of [their] day they search for [leaves] and bamboo shoots to [eat]. Sometimes they eat ants [or] termites. For the [rest] of the day, they lay in the sun and play with their [children].",

        ], [
            "id" => "FITB38",
            "sentence" => "The 1910 Cuba hurricane was said to be one of the worst tropical cyclones that ever [hit] Cuba. The storm [formed] in the southern Caribbean Sea [on] October 9, 1910. It made [landfall] on the [western] part of Cuba. The [storm] made a loop over the [open] water and then began [moving] towards the United States. ",

        ], [
            "id" => "FITB39",
            "sentence" => "Christmas is celebrated all over the world, as a [religious] holiday or as a time of [celebration]. The [traditions] are different from country to [country], but they nearly always [include] a feast, giving [gifts], and enjoying church or [public] festivities such as singing Christmas [songs]. Santa Claus is a [tradition] in many countries of the [world].",

        ], [
            "id" => "FITB40",
            "sentence" => "Birds are found on every continent of the world. Some birds live in freezing cold [environments], while [others] live in hot [deserts]. Birds can be [found] in all [parts] of the world such as in [forests], in [grasslands], on cliff faces, in [river] banks, and on stony sea [shores]. ",

        ], [
            "id" => "FITB41",
            "sentence" => '',

        ], [
            "id" => "FITB42",
            "sentence" => "The Japanese tea ceremony is a special way of making green tea. It is [called] the Way of Tea. It is a Japanese [cultural] activity involving the [ceremonial] preparation and [presentation] of powdered [tea]. People who [study] the tea [ceremony] have to learn about different [kinds] of tea. They [also] have to learn [about] Japanese clothes, flowers, and many [other] things. It takes a lot of [practice] to learn the tea ceremony.",

        ], [
            "id" => "FITB43",
            "sentence" => "Instant coffee is a very quick way to make coffee. Instant coffee is made in a [factory] and sold in [jars] or packets. First, [strong] coffee is made using ground coffee and [boiling] water. Then, the coffee grounds are [filtered] out. The coffee [liquid] is dried out until nothing is [left] except fine [powder]. This [is] then put [into] jars or packets. As soon as a spoonful of [instant] coffee is [added] to boiling water, it [dissolves] making coffee.",

        ], [
            "id" => "FITB44",
            "sentence" => "Giant pandas are ready to have cubs when they are between the ages of four and eight years. They [may] be able to have cubs until the age of twenty. Female pandas are [ready] to have a cub [only] once a [year]. This is in the [springtime]. There [are] only two to three [days] she is [ready] for a cub. Calls [and] scents bring [the] males [and] female pandas to [each] other.",

        ], [
            "id" => "FITB45",
            "sentence" => "The Beatles, an English rock band, formed in Liverpool, England in 1960. The [members] of the [band] were John Lennon, Paul McCartney, George Harrison, [and] Ringo Starr. Most [people] say [they] are the most [successful] and influential [band] in the history of [popular] music. The [group] were a main [part] of the creation of 1960s counterculture.",

        ], [
            "id" => "FITB46",
            "sentence" => "Many English-speaking countries spell words differently. In the United States, some [words] are spelled [differently] from the way they are [spelled] in the United Kingdom and many other [countries] where English is the main [language]. These different ways of [spelling] are sometimes [called] American English [and] British English.",

        ], [
            "id" => "FITB47",
            "sentence" => "Facebook is a social networking service and website started in February 2004. As [of] September 2012, Facebook has [over] one billion active users. Users make a [personal] profile, add other [users] as friends, and send [messages]. Facebook users must [register] before using the [site]. The name comes [from] the book given to university [students] at the start of the [school] year.\n",

        ], [
            "id" => "FITB48",
            "sentence" => "Lions have disappeared from North Africa and southwest Asia. Until the [late] Pleistocene, about 10,000 years [ago], the lion was the most [widespread] large land [mammal] after humans. They were [found] in most [of] Africa, [across] Eurasia from western Europe [to] India, and in the Americas [from] the Yukon to Peru. The lion is now a [vulnerable] species.",

        ], [
            "id" => "FITB49",
            "sentence" => "Geisha are traditional female Japanese entertainers. They are [skilled] at different Japanese [arts], like [playing] classical Japanese [music], dancing, and poetry. Some people [believe] that geisha are prostitutes, but they are not. The [term] geisha is made of two Japanese [words], gei [meaning] art and sha meaning [person] who does. The [most] literal [translation] of geisha to [English] is artist. Geisha are [respected] as artists and [performers].",

        ], [
            "id" => "FITB50",
            "sentence" => "Gothic architecture is a way of planning and designing buildings that [began] in Western Europe [in] the Late Middle Ages. Gothic [architecture] grew out of Romanesque architecture, in France in the 12th [century]. Gothic architecture [spread] across Europe and [lasted] until the 16th [century] when Renaissance architecture became [popular].",

        ], [
            "id" => "FITB51",
            "sentence" => "Romanesque was the style of architecture in Europe before the Gothic style. Gothic [architecture] grew out of Romanesque architecture. There was not a clean [break] between the two [styles]. Many of]the [features] of Gothic architecture did not [begin] in the Gothic [period]. They were [already] there in Romanesque architecture, and [slowly] changed to [become] Gothic. The main [changes] were the pointed arch and the flying buttress. These two [developments] allowed many other [changes] to happen.",

        ], [
            "id" => "FITB52",
            "sentence" => "After the attack on Pearl Harbor on December 7, 1941, the Japanese Navy and its Air force were [defeated] in several [important] battles. They [lost] many ships, [hundreds] of fighter aircraft, and many of their best [pilots]. The Japanese [industry] was small and very poor [compared] to the American industry. For this [reason], the United States [replaced] their [lost] ships and planes with [better] ones very [quickly]; but Japan could not compete.",

        ], [
            "id" => "FITB53",
            "sentence" => "Secularism is the idea of something being not religious or not [connected] to a religious organization. An [example] of this is the [government], which is [independent] of any religion in many [states]. In [some] countries, [such] as Pakistan, England, and Greece there is a [state] religion. In [that] case, the government [follows] the state religion. In [contrast], India, South Africa and the United States have [laws] that religion and government should be separate.",

        ], [
            "id" => "FITB54",
            "sentence" => "Kamikaze is a word of Japanese origin. It comes from the [name] the Japanese gave to a typhoon that [destroyed] the Mongol ships in the 13th [century]. In Western [culture], the [word] kamikaze is used to mean the suicide pilots. Japanese [pilots] attacked the [ships] of the Allied Powers in the [final] years of World War II, [during] which they [flew] their planes into [enemy] ships. It has also [come] to mean other [kinds] of suicide attacks.",

        ], [
            "id" => "FITB55",
            "sentence" => "North America is a large continent in the Northern and Western Hemispheres of Earth. It [is] to the [east] of the]Pacific Ocean, the [west] of [the] Atlantic Ocean, the [south] of [the] Arctic Ocean, and it is the [northern] part of [the] Americas. The southernmost [part] is Central America. It is the [third] largest [continent] in the [world], after Asia and Africa.",

        ], [
            "id" => "FITB56",
            "sentence" => "The people in Iceland are mostly of Scandinavian origin. The [language] they [speak] is Icelandic. The [language] has not [changed] much in 1,000 [years], so Icelanders are still [able] to [read] the sagas about the Vikings [without] many [problems]. Icelandic [people] are [considered] to be the [happiest] people on Earth. Iceland has the [highest] birth [rate] in Europe, [highest] divorce rate and the highest [percentage] of women working [outside] their home.",

        ], [
            "id" => "FITB57",
            "sentence" => "A family name is a name shared by people in the same family. In English, the family name is [always] at the [end], so it is also [called] a last name or [surname]. Children [usually] have the same [family] name as their [father]. A [married] woman often changes her [family] name to be the [same] as her [husband]. Some other [languages] put the [family] name [first] and some [give] a child the mother's family name.",

        ], [
            "id" => "FITB58",
            "sentence" => "Jimmy Hendrix was an American guitarist. Hendrix was a major [influence] on other rock and roll [musicians]. Initially gaining [recognition] in England, Hendrix [became] famous [throughout] the world after [appearances] at the Monterey Pop Festival in 1967, at [which] he [purposely] set his guitar on fire. A self-taught musician, [unable] to read or write [music] notation, he [famously] played a right-handed [guitar] turned [over] and restrung to [play] left-handed. Jimi Hendrix was [named] greatest guitarist of all time.",

        ], [
            "id" => "FITB59",
            "sentence" => "The Cuban Missile Crisis was a time of heightened confrontation between the Soviet Union, the United States, and Cuba [during] the Cold War. It was a proxy [conflict] around Cuba. It [began] when the Soviet Union [began] building missile [sites] in Cuba in 1962. This [crisis] is seen as [one] of the most important [confrontations] of [the] Cold War. It may have been the [moment] when the Cold War came closest to a [nuclear] war.",

        ], [
            "id" => "FITB60",
            "sentence" => "Castro made Cuba the first socialist country of the Americas. During the Cold War he was a [friend] of the Soviet Union, and he [depended] on their help until the USSR [collapsed]. An important [moment] of the Cold War [was] the Cuban Missile Crisis of 1962. In October 1962 the United States of America [discovered] that the Soviet Union was [placing] missiles on Cuba, [close] to the United States. After very [tense] talks, a nuclear war was [avoided] between the Soviet Union and the USA.",

        ], [
            "id" => "FITB61",
            "sentence" => "Colonialism occurs when a country or a nation takes control of other lands, regions, or [territories] outside of its [borders] by turning them into a [colony]. Usually, it is a more [powerful], richer [country] that takes [control] of a smaller, [less] powerful [region] or territory. Sometimes the words [colonialism] and imperialism are used to [mean] the same thing.",

        ], [
            "id" => "FITB62",
            "sentence" => "Bitcoin is a digital and global money system currency. It [allows] people to [send] or receive money across the [internet], even to [someone] they don't know or don't [trust]. Money can be [exchanged] without being linked to a real [identity]. The [mathematical] field of cryptography is the basis for Bitcoin's [security]. Bitcoin was [invented] by someone using the name Satoshi Nakamoto.",

        ], [
            "id" => "FITB63",
            "sentence" => "Some people call Castro a dictator. They [criticize] him because they say he has [ignored] some human [rights], for example, torture, murder and oppression of [freedom] of speech. Other [people] do not [think] this is [true]. For [example], Nelson Mandela had spoken in [support] of Castro and has [thanked] him for aid to Africa. Amnesty International [criticized] Cuba's [human] rights [record] but noted slow [progress] in July of 2002.",

        ], [
            "id" => "FITB64",
            "sentence" => "If people have any problem regarding the law, they can contact a lawyer. A [legal] problem is [referred] to as a case. A person can [hire] a lawyer to [start] a case [against] someone else, or to [help] with a case that has been [started] against them. The lawyer's [job] is to use their [knowledge] of the law to [convince] the court that the [client] is on the [right] side of the argument.",

        ], [
            "id" => "FITB65",
            "sentence" => "A crime is an act done by a person which is against the laws of a country. A [person] who does this is [called] a [criminal]. The [basic] idea of what [things] are called crimes is [that] they are [thought] to [be] things that [might] cause a [problem] for [another] person. Things like [killing] another [person], [injuring] another person, or [stealing] from another person [are] crimes in [most] countries. Also, it [can] be a [crime] to have or [sell] contraband such as guns or illegal drugs.",

        ], [
            "id" => "FITB66",
            "sentence" => "Liberals in Australia have many different ideas about government than liberals in the United States. Most liberals in Australia [believe] that [government] should not [increase] taxes, and would like a government that has [lower] taxes and less power over the [economy]. The [main] liberal [political] party in Australia is [the] Liberal Party of Australia. The Liberal Party [also] believes that [government] should [support] traditional [values] and morals, [something] which many conservatives believe as well.",

        ], [
            "id" => "FITB67",
            "sentence" => "After Shakespeare died, some writers began to say that his work was not really [written] by William Shakespeare. They provided [various] reasons. For example, the person who [wrote] Shakespeare [knew] a lot about other [countries], but William Shakespeare [never] left England. Several other [writers] of Shakespeare have been [suggested], such as Francis Bacon. However, most [scholars] believe that William Shakespeare did [write] the works that bear his name.",

        ], [
            "id" => "FITB68",
            "sentence" => "Ancient Rome is the name for a civilization in Italy. It [began] as a small farming [community] in the 8th [century] BC. It [became] a city and took the [name] of Roma from its [founder] Romulus. It [grew] to become the largest [empire] in the ancient world. It [started] as a [kingdom], then [became] a republic, then an empire.",

        ], [
            "id" => "FITB69",
            "sentence" => "Karl Lagerfeld was a fashion designer. Many [people] saw him as one of the most [influential] people of the 20th [century]. He made [fashion] for many [different] labels, for [example] Chanel, Chloé and Fendi. He also [owned] several [labels], which he [started] in the [early] 1980s. He [designed] clothes for many [leading] artists and celebrities.",

        ], [
            "id" => "FITB70",
            "sentence" => "Wales is one of the four nations in the United Kingdom. The [native] people of Wales, the Welsh, [have] their own [language], Welsh. Although not all Welsh people can [speak] Welsh, it is a real living [language] for about 20% of Welsh [people]. Three [million] people [live] in Wales. Most of [them] live in the [southern] and eastern parts of the [country], where the capital city is located. ",

        ], [
            "id" => "FITB71",
            "sentence" => "The Bulldog is a medium-sized breed of dog that originated in England. These dogs are [medium] in size, but [wide] and compact with [thick] heads. Their muzzle is short [and] pug. Their [coat] comes in [many] colors, [including] fawn, white, [black] and brindle. They are [good] family [pets], known for their [courage] and their ability to be a [good] guard dog. ",

        ], [
            "id" => "FITB72",
            "sentence" => "Abraham Lincoln was born on February 12, 1809, in Hodgenville, Kentucky, United States. His [parents] were Thomas Lincoln [and] Nancy Hanks. His [family] was very [poor]. Abraham [had] one [brother] and [one] sister. His [brother] died in [childhood]. They [grew] up in a [small] log cabin, with [just] one [room] inside. Although slavery [was] legal in Kentucky [at] that time, Lincoln's father, [who] was a religious Baptist, [refused] to [own] any slaves.",

        ], [
            "id" => "FITB73",
            "sentence" => "A guard dog is a dog that is trained to watch for and guard against people or [animals]. Their [main] job is to keep their [owner] and the owner's [property] safe. A [guard] dog is not the [same] as a watchdog. A [watchdog] will let its [owner] know that a [stranger] is coming by [barking]. Guard dogs, [however], may be trained to [attack] if their owner [tells] them to. If trained [properly], they will give a warning before attacking.",

        ], [
            "id" => "FITB74",
            "sentence" => "Pumas are carnivores because they eat only meat. Pumas [are] apex [predators]. They [hunt] at night. Cougars can see [better] at [night] than people can. They can [hear] well too. Pumas [stalk] their prey, which [means] they walk slowly and [quietly], they [hide] and then when close and [jump] or run fast to [catch] their prey by [surprise]. Pumas live and hunt alone.",

        ], [
            "id" => "FITB75",
            "sentence" => "According to communist writers and thinkers, the [goal] of communism is to [create] a stateless, classless [society] and to end [capitalism]. Communist [thinkers] believe this can [happen] if the [people] take away the power of the rich and [establish] worker control of the means of [production]. Communism is not anti-individualist. [However], it does say that [decisions] should be good for the [population] as a whole, instead of just being good for only a few of people in the country.",

        ], [
            "id" => "FITB76",
            "sentence" => "Karl Heinrich Marx was a German political thinker who wrote about economics and [politics]. Marx [thought] that if a [place] that works [together] runs on wage-labor, then there would always be class [struggle]. Marx thought that this [class] struggle would result in [workers] taking power. He [believed] that no [economic] class should have [power] over another. Marx believed that  [everyone] should [contribute] what they can, and [everyone] should get what they [need]. His most [famous] book was the Communist Manifesto.",

        ], [
            "id" => "FITB77",
            "sentence" => "Capitalism is an economic system. In it, the [government] plays a [secondary] role. People and [companies] make most of the [decisions] and own most of the [property]. Goods are [usually] made by [individuals] who work for [companies] that [produce] the goods. The companies then [sell] what is made by the [individuals] and make a [profit]. The means of [production] is largely or [entirely] privately owned and operated for profit.",

        ], [
            "id" => "FITB78",
            "sentence" => "Socialists and communists are people who do not support capitalism. They say it [hurts] workers, because [businesses] make more money by [selling] things than they pay the [workers] who make the things. Business [owners] become [rich] while workers remain poor and [exploited]. They also argue that [society] would be more [efficient] if people thought less about [competing] against one another and, instead, [thought] more of working together for the [overall] good of society.",

        ], [
            "id" => "FITB79",
            "sentence" => "Not everyone celebrates birthdays, including Jehovah’s Witnesses. In [many] English-speaking countries, [people] sing the song Happy Birthday to You to the person [celebrating] her or his [birthday]. There are [similar] songs in other [languages]. A birthday cake is usually [decorated] and covered with [candles]. Most of the [time], the number of candles is the same as the age of the birthday person.",

        ], [
            "id" => "FITB80",
            "sentence" => "Christmas celebrates the birth of Jesus. The [story] of how this [happened] is told in part of the Bible known [as] the Gospels. There [are] four Gospels telling the [life] of Jesus. The Gospel [of] Luke tells the most [about] his birth, and the Gospel of Matthew [tells] another part of the [story]. The Gospel of John says [that] Jesus came [from] God to bring his Word or [message] to all people.",

        ], [
            "id" => "FITB81",
            "sentence" => "A carpenter is a person who works with wood. They [can] make cabinets, [build] houses, or do [other] things with wood. Carpenters [usually] make very [good] foremen on larger jobs as they [deal] with so much of the [project] from the ground up. Carpenters are always adding to their [tools] and always [learning] how to use the [new] tools, materials, and ways of working with wood.",

        ], [
            "id" => "FITB82",
            "sentence" => "The earliest toys were made from rocks, sticks, or clay. In Ancient Egypt, [children] played with dolls [made] of clay [and] sticks. In Ancient Greece and Ancient Rome, children [played] with dolls [made] of wax or terracotta, sticks, bows and arrows, and yo-yos. Later these developmental [games] were used to [create] indoor playsets for [homes]. When Greek [children], especially girls became adults, they were [told] to sacrifice the toys to the gods.",

        ], [
            "id" => "FITB83",
            "sentence" => "Old plastics are usually thrown away and put in landfills. Some plastics [release] toxic fumes when [heated]. Some [plastics] are recycled so they won't [become] waste. Some plastics have [other] materials added to [them], like glass, [because] they make the plastic [stronger] and stiffer.",

        ], [
            "id" => "FITB84",
            "sentence" => "3D printing is a way of creating three-dimensional solid objects. 3D [printing] is done by building [up] the object layer [by] layer. [Usually], 3D printers use plastic [because] it is easier to use and [cheaper]. Some 3D [printers] can print with other [materials], like metals and ceramics, but they [cost] too much money [for] most people.",

        ], [
            "id" => "FITB85",
            "sentence" => "Donald John Trump was the 45th President of the United States. Before [becoming] president, he [was] a businessman and [television] personality. Trump [was] the chairman and [president] of The Trump Organization. Much of [his] money was [made] in real estate in New York City. He [used] to own the Miss Universe pageant. He was the [star] in his own reality TV [show] The Apprentice.",

        ], [
            "id" => "FITB86",
            "sentence" => "The Titanic disaster changed many maritime ship laws. [Because] so many people died, [authorities] felt that laws [should] be put into place [to] make ship [travel] safer. Changes included [requiring] all ships to carry [enough] lifeboats for [everyone] on the ship, and [emergency] materials such as flares. Someone [must] be at the ship's radio all the time.",

        ], [
            "id" => "FITB87",
            "sentence" => "In his later years, Tesla was regarded as a mad scientist. He [became] noted for [making] bizarre and [misunderstood] claims about possible scientific [developments]. At the end of his life, Tesla was mocked [by] his contemporaries [and] lived his [remaining] years destitute. Never [putting] a large [focus] on his finances, Tesla [died] impoverished at the age of 86.",

        ], [
            "id" => "FITB88",
            "sentence" => "The aim of our research was to explore how moving home at a young age affected the [development] of pre-school children. There [are] many different [reasons] why families choose to move [home]. Over a [period] of ten [years] our research team has [investigated] whether the conditions [surrounding] moving home, or [indeed] the fact of [moving] itself, contribute to children’s [development] problems.",

        ], [
            "id" => "FITB89",
            "sentence" => "Child language brokers are children or young people who translate or interpret on behalf of family members or others [who] do not speak the [local] language. When [settling] into a [new] country, [children] often learn the [local] language more [rapidly] than their parents [and] other [adults]. As a [result] youngsters start [taking] on the [role] of [language] broker in a number of [different] contexts such as shops, banks, schools, doctors, etc.",

        ], [
            "id" => "FITB90",
            "sentence" => "Our mission is to be a university that has global significance, to [be] a [leader] in higher [education] providing excellent [research] and teaching, and [contributing] to the most [important] issues and [debates] of [modern] times. We are [proud] that this [university] is increasingly having an [impact] worldwide.",

        ], [
            "id" => "FITB91",
            "sentence" => "This year the National Environmental Science Competition received excellent undergraduate and postgraduate entries from all across the [country], with a wide [range] of projects. We are [delighted] that our awards are [encouraging] exciting [and] valuable [projects] that go [beyond] research and analysis to [develop] solutions for a [number] of [key] problems. Information [about] the shortlisted [projects] will be [posted] on our website.",

        ], [
            "id" => "FITB92",
            "sentence" => "The Turks and Caicos Islands are a multi-island archipelago at the southern tip of the Bahamas chain, [approximately] 550 miles south-east of Florida. The [islands] are an overseas [territory] of the United Kingdom [although] they [exercise] a high degree [of] local political [autonomy]. The [economy] of the [islands] rests [mainly] on tourism, with some [contribution] from banking.",

        ], [
            "id" => "FITB93",
            "sentence" => "There is a part of Spain’s sun-baked Andalucia that is extraordinary not only because of its unspoiled terrain and [authentic] Spanish traditions but also [because] of its caves. These [are] not dark, damp holes, [with] dripping [water] and evil [smells]. They are [residences], ancient Bronze Age dwellings [now] being [refurbished] for hundreds [of] 21st century Spaniards.",

        ], [
            "id" => "FITB94",
            "sentence" => "Domestication is an evolutionary, rather than a political, development. It is [certainly] not a regime humans [imposed] on animals some 10,000 years [ago]. Rather, domestication [happened] when a [small] handful of [especially] opportunistic species [discovered] through Darwinian trial and [error] that they [were] more likely to [survive] and [prosper] in an alliance with [humans] than on their [own].",

        ], [
            "id" => "FITB95",
            "sentence" => "Road bicycle racing is the cycle sports discipline of road cycling, held on paved roads. Road racing [is] the most [popular] professional [form] of bicycle [racing], in [terms] of numbers of [competitors], events, and [spectators]. The most common [competition] format is the mass start event, where riders start [simultaneously] and [race] to set finish point.",

        ], [
            "id" => "FITB96",
            "sentence" => "Currently, integration is increasingly needed in the business environment. This need [emerges] from the [efficiency] and synergy requirements necessary in a [complex] and turbulent [environment]. In other [words], [integration] is needed to facilitate [coordination], which is [related] to building a competitive [advantage].",

        ], [
            "id" => "FITB97",
            "sentence" => "Located at the heart of a world-famous city, Liverpool University's [excellence] in teaching, [learning] and research, first-class [facilities], and [outstanding] support [places] the university in the [top] 1% of universities [worldwide]. The University of Liverpool will [provide] you with [an] inspiring student [experience], in a diverse international community.",

        ], [
            "id" => "FITB98",
            "sentence" => "Many know a bit about the Japanese traditional tea ceremony, its history, intricacies and religious origins. [However], few people [outside] Japan have a [deep] understanding of the esoteric [meaning] of the [practice]. Indeed, [even] in Japan, the [secret] meaning of the tea [ceremony] is little [understood] except by those who have [devoted] their lives to the discipline.",

        ], [
            "id" => "FITB99",
            "sentence" => "An avalanche is a rapidly descending large mass of snow, ice, soil, rock, or [mixtures] of these materials, sliding or [falling] in response to the force of [gravity]. Avalanches, which [are] natural forms of [erosion] and often seasonal, are usually [classified] by their [content] such as a debris or snow avalanche.",

        ], [
            "id" => "FITB100",
            "sentence" => "Akimbo, this must be one of the odder-looking words in the language. It puzzles us in [part] because it doesn’t [seem] to have any [relatives]. What’s [more], it is now [virtually] a fossil word, until [almost] invariably found in arms Akimbo, a [posture] in [which] a person [stands] with hands on hips [and] elbows sharply [bent] outward, one that signals [impatience] and hostility.",

        ], [
            "id" => "FITB101",
            "sentence" => "Many papers you write in college will require you to include quotes from one or [more] sources. Even if [you] don’t have to [do] it, [integrating] a few quotes into your [writing] can add life and [persuasiveness] to your arguments. The [key] is to use [quotes] to support a [point] you’re trying to make [rather] than just include them to fill [space].",

        ], [
            "id" => "FITB102",
            "sentence" => "The next wave of leaders in industrial manufacturing will [build] an ecosystem that capitalizes on the [promise] of analytics and connectivity to [maximize] efficiency for their [customers]. They will map [out] their strategies and [prioritize] measures that will [bring] the most value to their [business], starting now with pilot [projects], and building greater [strengths] in data [analytics] with cross-functional [teams] of experts.",

        ], [
            "id" => "FITB103",
            "sentence" => "A young man from a small provincial town, without independent wealth, a powerful family [connections], nor  a [university] education [moved] to London in the late 1580’s and, in a [remarkably] short [amount] of time, [became] of the [greatest] playwright not [only] of his [age] but of all [time]. How did Shakespeare [become] Shakespeare?",

        ], [
            "id" => "FITB104",
            "sentence" => "Plato often discusses the father-son relationships and the question of [whether] a father’s [interest] in his sons has much to do [with] how well his sons [turn] out. In [ancient] Athens, a boy was socially [located] by his family [identity], and Plato [often] refers to his characters in [terms] of [their] paternal and fraternal [relationships]. Socrates [was] not a family man but [saw] himself as [the] son of his mother, who was apparently a midwife.",

        ], [
            "id" => "FITB105",
            "sentence" => "During the Early Modern period, the universities of Europe would see a [tremendous] amount of growth, productivity, and [innovative] research. At the [end] of the Middle Ages, [about] 400 years [after] the first European university was [founded], there [were] twenty-nine universities spread [throughout] Europe.",

        ], [
            "id" => "FITB106",
            "sentence" => "Flags can be unifying to a country, and many times are. A [country] that can [look] to its flag [flying] high above the [landscape] in times of [trouble] and remember that the [country] will go on. People that have [never] met before can feel [unity] towards one another [knowing] that they’re [part] of the same [country] and fly the same flag.",

        ], [
            "id" => "FITB107",
            "sentence" => "The Bermuda Triangle is a mythical section of the Atlantic Ocean. Bermuda and Puerto Rico where [dozens] of ships and airplanes have [disappeared]. Unexplained [circumstances] surround some of these [accidents], including one in which the [pilots] of a squadron of U.S. Navy bombers became [disoriented] while [flying] over the [area]; the planes were never found.",

        ], [
            "id" => "FITB108",
            "sentence" => "Smartphones have become an [everyday] essential for millions [of] people. We [rely] on them for [everything] from [updating] our social media profiles to [banking]. Taking [out] a smartphone contract that [bundles] together your calls, data, [and] texts with the [cost] of the handset can help [spread] the cost. However, [this] can also [mean] you’ll pay more in the long run.",

        ], [
            "id" => "FITB109",
            "sentence" => "Computational thinking involves looking at a problem and working out a way a [computer] might be able to help you [solve] it. To do this, you need to [understand] how a computer processes [information]. You probably use [computational] thinking at school or [work] too, but don’t [realize] it. If you [analyze] a problem and plan out the [solutions], you are using computational thinking.",

        ], [
            "id" => "FITB110",
            "sentence" => "A programmer or software engineer is someone who designs and makes computer programs. They [might] use one type of computer [language] or many. Programmers [are] logical [thinkers] and problem-solvers. They look at [problems] and try to come up with [different] ways of solving [them]. There is [often] more than one way to [solve] a problem [and] programmers try to [find] the most efficient way. ",

        ], [
            "id" => "FITB111",
            "sentence" => "The global computer network called the internet is part of our everyday [lives] at home and at school. It [is] made up of millions of [computers] all over the [world] that are digitally [connected] to each other by cable, fibre [or] wireless links. You can use the [internet] to browse websites, [communicate] with people, [download] pictures and videos, listen to music, or do lots of other amazing things.",

        ], [
            "id" => "FITB112",
            "sentence" => "Charts are a great way to show a large [amount] of data. They can [represent] numbers, words, measurements, or [observations] in a way that [makes] them easier to understand and [analyze]. It is [important] to make sure that the [data] on your [chart] is presented [clearly] and can be [understood] by anyone who [looks] at it. They shouldn't have to ask you to [explain] it.",

        ], [
            "id" => "FITB113",
            "sentence" => "A tsunami is a natural disaster that occurs when series of [waves] in the ocean crash into [land]. A [tsunami] has a very [long] wavelength. It can be [hundreds] of kilometers [long]. Usually, a tsunami [starts] suddenly. The waves [travel] at a great speed [across] an ocean with [little] energy loss. They can [remove] sand from [beaches] and destroy trees, houses and even whole towns.",

        ], [
            "id" => "FITB114",
            "sentence" => "Oceans are areas of salty water that fill enormous basins on the Earth’s surface. Oceans are [deep] as well as [wide]. On [average] an ocean is a little over two miles deep. But [about] 200 miles southwest of Guam [in] the Pacific Ocean, the [water] in the Mariana Trench is [almost] seven miles deep. That’s the deepest part of the ocean.",

        ], [
            "id" => "FITB115",
            "sentence" => "Political globalization is how institutions and countries can influence the whole world. The United Nations [is] an example of [globalization] because most [countries] of the world are [members] of its General Assembly. This international [organization] can make countries [follow] rules and apply [economic] sanctions to a country [that] doesn't. This means the [countries] in the U.N will [punish] them by not talking or [trading] with them so they don't [benefit] from globalization.",

        ], [
            "id" => "FITB116",
            "sentence" => "Animation is a way of making a movie from many still images. The [images] are put together one [after] another, and then [played] at a fast speed to give the illusion of [movement]. Animation is a relatively new [art] form, and though the [concept] of moving [images] has been a theme throughout [ancient] civilizations, it was not [until] late into the 19th [century] that experimental [animation] truly began. Today, the industry of animation is booming, making up a huge commercial enterprise.",

        ], [
            "id" => "FITB117",
            "sentence" => "Coffee is a plant and the name of the drink that is made from this plant. The [coffee] plant is a bush or [tree] that can [grow] up to ten meters (about 32 feet) tall, but is [usually] cut [shorter]. Coffee plants [originally] grew in Africa, and now also [grow] in South America, Central America [and] Southeast Asia. They are an important [crop] for the economies of many countries.",

        ], [
            "id" => "FITB118",
            "sentence" => "Starbucks started in Seattle in the United States in 1971. The [number] of stores has grown [quickly]. There are [over] 9,000 Starbucks stores [all] over the [world]. Most of these [stores] are in the United States. Some [large] cities in the U.S. have [many] Starbucks stores. Sometimes they [open] so many stores in one [city] that there are two Starbucks within a few blocks of each other.",

        ], [
            "id" => "FITB119",
            "sentence" => "An earthquake is shaking of the surface of earth, caused by sudden movement in the Earth's crust. They can be extremely [violent]. Earthquakes are usually quite [brief], but may [repeat]. They are the [result] of a sudden release of [energy] in the Earth's crust. This [creates] seismic waves, which are [waves] of energy that travel [through] the Earth. The [study] of earthquakes is [called] seismology. Seismology [studies] the frequency, type and size of earthquakes over a period of time.",

        ], [
            "id" => "FITB120",
            "sentence" => "People find diamonds where volcanoes were a long time ago. They [sometimes] find tiny ones at the site of a meteorite [strike]. Sometimes people [find] diamonds on the [top] of the [ground]. But in [places] like South Africa, they must [dig] deep down [into] a diamond [mine] to get [diamonds]. Diamonds were first found in India.",

        ], [
            "id" => "FITB121",
            "sentence" => "Even in the stone age people made music. The [first] music was probably [made] trying to imitate sounds and rhythms that [occurred] naturally. Human music may [echo] these phenomena using [patterns] and repetition. This [kind] of music is still here [today]. Many [people] still [imitate] sounds [that] are heard in [nature]. Nowadays, music [mostly] serves as entertainment.",

        ], [
            "id" => "FITB122",
            "sentence" => "A family is a group of people who, in most cases, live together. They [share] their money and [food] and are supposed to take care of one [another]. Its [members] are either genetically [related], for instance, [brothers] and sisters, or legally [bound] to each other, for example by [marriage]. In many [cultures], the members of a [family] have the [same] or a similar [surname]. A family is said to be society´s smallest unit, its nucleus.",

        ], [
            "id" => "FITB123",
            "sentence" => "Globalization is a topic many people debate nowadays. It is the [way] that local or national ways of [doing] things become [global], that is, done together [around] the world. It is about [economics] or trade, technology, politics, and [culture]. It [describes] the way [countries] and people of the world [interact] and integrate. People feel [differently] about [globalization]; some think it helps everyone while others think it hurts some people.",

        ], [
            "id" => "FITB124",
            "sentence" => '',

        ], [
            "id" => "FITB125",
            "sentence" => "Johannes Gutenberg introduced the concept of movable type and the printing press to Europe. While this may not [sound] like a big deal at [first], the [printing] press is often [considered] as the most important [invention] in modern times. Think [about] how important [information] is today. Without [books] and [computers] you wouldn't be able to [learn], to [pass] on information, or to share scientific [discoveries]. Prior to Gutenberg [introducing] the printing press, making a book was a laborious process in Europe.",

        ], [
            "id" => "FITB126",
            "sentence" => "Birds of prey have been treated very differently over the years. For [example], during the Middle Ages, red kites were [highly] valued. As [scavengers], they helped to keep the [streets] of London and [other] towns [clean] of waste. However, [attitudes] towards red kites and other [birds] of prey [changed] in the 16th [century], when a [series] of laws [encouraged] people to kill [them] as vermin. It wasn't until 1954 that new laws were passed to make it illegal to kill birds of prey.",

        ], [
            "id" => "FITB127",
            "sentence" => "Did you know owls are sometimes a symbol of learning? Libraries and [bookstores] sometimes use [pictures] of owls to [represent] reading or [wisdom]. Maybe this is [because] owls can see in the [dark], detecting things that [others] can’t see. They are [silent], quick, and keep to [themselves]. They sometimes have a [watchful], thoughtful look. Owls can’t really read, but they are smart. ",

        ], [
            "id" => "FITB128",
            "sentence" => "Toy Story is a 1995 American animated movie. It was the [first] Pixar [animated] movie. Pixar made the [movie] while Disney packaged it and [sold] the reels of the [movie] to [theaters]. It was [released] on November 22, 1995. It was the [first] animated movie to be [completely] done with [computers] instead of hand-drawn [animation]. Toy Story had two [sequels], Toy Story 2 released in 1999, Toy Story 3 released in 2010 and \"Toy Story 4\" will be released in 2019.",

        ], [
            "id" => "FITB129",
            "sentence" => "Steve Jobs was a Silicon Valley businessman most famous for his work with the company Apple Computer Inc, starting with the [release] of the Apple I in 1976. Together [with] Apple co-founder Steve Wozniak, Jobs [helped] make the idea of the [personal] computer [popular] in the [late] 1970s. In the [early] 1980s, [still] at Apple, Jobs [was] one of the first to see the [potential] of using a mouse to control things on a computer screen.",

        ], [
            "id" => "FITB130",
            "sentence" => "London is the capital and largest city of England and the United Kingdom. London is the [biggest] city in [western] Europe, and the world's largest [financial] centre. For a [long] time, London was a [small] city. All its [people] lived [inside] the [walls] that were built [by] the Romans. This [area] is still [called] the City of London. There [were] many [villages] around the city. [Gradually], more people came to live there. Then, step by step, the villages joined together into one huge city.",

        ], [
            "id" => "FITB131",
            "sentence" => "Most people in London are British. However, London [also] has many [immigrants]. These [people] come from many [different] countries. They [speak] many different [languages] and have different [religions] and [cultures]. There are [also] many people from [different] countries who [stay] in London on [business]. Many people [visit] London as [tourists]. They may [see] the [famous] \"Sights of London\". These sights include palaces, churches and museums.",

        ], [
            "id" => "FITB132",
            "sentence" => "TikTok is a online video sharing social networking service. It [lets] people [create] short [music] and lip-sync [videos] of 3 to 15 seconds and short looping [videos] of 3 to 60 [seconds]. Users can also post [anything] from life [hacks] to dances or [even] recipes. It is [popular] in Canada, the United States, and other [parts] of the [world]. It was first [released] under the name of musical.ly but was later bought out and renamed TikTok.",

        ], [
            "id" => "FITB133",
            "sentence" => "Journalism refers to the production and distribution of reports on recent events. The word journalism [applies] to the occupation, using [methods] of gathering [information] and [using] literary techniques. Various [forms] of journalistic mediums [include] print, television, [radio], Internet and in the [past] newsreels. Concepts of the [appropriate] role for journalism [vary] between [countries]. In some nations, the news media is controlled by government intervention, and is not a fully independent body.",

        ], [
            "id" => "FITB134",
            "sentence" => "El Niño happens when the sea water temperature rises in surface waters of the tropical Pacific Ocean. Every two to five [years] the Pacific Ocean has this [event]. A weak, warm [current] starts [around] Christmas [along] the coast of Ecuador [and] Peru. It [lasts] for only a few [weeks] to a [month] or more. Every three to seven years, an El Niño [event] may [last] for many [months]. This can change the weather and have important effects around the world.",

        ], [
            "id" => "FITB135",
            "sentence" => "Mount Fuji is officially classified as an active volcano, but some describe Fuji as dormant or inactive. Many people [climb] Mt. Fuji every [year]. The [official] climbing [season] is in the [summer] from July 25 [to] August 25. There are [three] mountain-climbing [routes] on the Shizuoka [side] of Mt. Fuji. There is a [post] office on the [top] of Mt. Fuji, [which] is [open] only in summer. The post office was built in 1909 and is the highest post office in Japan.",

        ], [
            "id" => "FITB136",
            "sentence" => "The samurai were Japanese warriors. A samurai [believed] that his [sword] held his [soul]. That [made] the sword the most [important] thing he had. Samurai were [allowed] to [fight] anyone who did not show them proper [respect]. Every sword [had] to be [tested]. To do this, the [owner] of the sword could [execute] a [criminal]. This [allowed] the warrior to [test] his sword's [sharpness]. Samurai led their lives according to the ethical code of bushido, the way of the warrior.",

        ], [
            "id" => "FITB137",
            "sentence" => "Samurai women were trained to defend themselves and their children. They [usually] did this [when] their [warrior] husbands were [busy] in [battle]. This is [why] samurai [women] were [trained] to [handle] swords and [short] daggers. During the Edo [period], Japanese [women] were [trained] to handle short [daggers] by the [age] of 18. The short knife was [used] by [young] women to [defend] their virtue or, if they lost it, to take their own life.",

        ], [
            "id" => "FITB138",
            "sentence" => "Surfing is a water sport done in the sea. The surfer [uses] a surfboard to [catch] a wave and [ride] in towards the [shore]. Surfing was [invented] by the Polynesians at [least] 4000 years [ago]. It has [become] a popular [sport] among [both] men and [women] of all [ages]. Though [surfing] is [practiced] in many other Pacific [nations], its center [remains] Hawaii, where many rounds of the international surfing championships are held annually. ",

        ], [
            "id" => "FITB139",
            "sentence" => "Cricket is popular in many countries, mostly in Commonwealth countries.The countries [where] cricket is [most] popular [compete] in international [matches] that last up to 5 days, [which] are called Test [matches]. Test matches are the top [international] matches played [between] countries. The main [point] of test cricket is to test [young] players. Tests [last] for up to five [days]. This is [why] many [also] call it 5 [day] cricket, and can [still] end in a draw [match]. It is the longest format of cricket.",

        ], [
            "id" => "FITB140",
            "sentence" => "Artificial intelligence is the ability of a computer program to think and learn. In [general] use, the [term] artificial intelligence [means] a machine which [mimics] human cognition. At [least] some of the [things] we [associate] with other minds, such as [learning] and problem [solving] can be done by [computers], though not in the same [way] as we do. An [extreme] goal of AI research is to create computer programs that can learn, solve problems, and think logically.",

        ], [
            "id" => "FITB141",
            "sentence" => "Space travel has become much safer as scientists have overcome potential problems, but it’s still dangerous. It’s [also] very [expensive]. In order for a [space] shuttle to [break] free of Earth’s [gravity], it has to [travel] at a [speed] of 15,000 miles per hour. Space [shuttles] need 1.9 million liters of [fuel] just to [launch] into space. That’s [enough] fuel to [fill] up 42,000 cars! Combine the [high] speed, heat and fuel needed for launching and you’ve got a very potentially dangerous situation.",

        ], [
            "id" => "FITB142",
            "sentence" => "Sundials were an early form of timekeeping. The apparent [position] of the Sun in the sky [moves] over the [course] of a day, reflecting the [rotation] of the Earth. Shadows [cast] by stationary objects move [correspondingly], so their [positions] can be used to [indicate] the time of day. A sundial [shows] the time by [displaying] the [position] of a shadow on a flat [surface], which has markings that correspond to the [hours]. Sundials were widely used in ancient times.",

        ], [
            "id" => "FITB143",
            "sentence" => "Diplomacy is the use of tact to gain strategic advantage or to find mutually acceptable solutions to a common challenge. It may [include] the phrasing of [statements] in a non-confrontational, or polite [manner]. Diplomacy often [involves] countries making an [agreement] with each other, such as a [treaty]. Diplomacy is the [talk] between the [representatives] of [states], such as their [heads] of state. Sometimes, these talks are about [trade] or [business], and sometimes they are about war and [peace]. Diplomacy happens a lot when two or more countries fight.",

        ], [
            "id" => "FITB144",
            "sentence" => "Found in northeast Africa, the Nile has long been recognized as the longest river in the world. There is some [debate] over this [title], though – some [scientists] argue that the Amazon river in South America is [longer]. The Nile has [been] an important [source] of [life] for people throughout [history]. Around 5,000 years ago, the Ancient Egyptians [relied] on the Nile for [fresh] water, food and [transportation]. It also provided them with fertile land to farm on.",

        ], [
            "id" => "FITB145",
            "sentence" => "Originally, the word skyscraper meant a tall sail on a sailing ship. Over time, the word's [meaning] has changed, and [today] it means a tall [building]. Until the nineteenth [century], buildings [taller] than six [stories] tall were not [common]. Tall [buildings] made of [weak] materials would fall [down]. In addition, [people] did not like [walking] up many steps and running water could only be brought up to fifty feet high.",

        ], [
            "id" => "FITB146",
            "sentence" => "A cheetah’s spots cover nearly its entire body and may [serve] as camouflage by offsetting [shadows] in the gray-hued grasses they [inhabit]. Camouflage is not only [essential] for stalking [prey] but also for [protecting] cheetah cubs from [predators]. Did you know? Much like a human [fingerprint], a cheetah’s spots and the ring pattern of its tail are unique!",

        ], [
            "id" => "FITB147",
            "sentence" => "Sewage is the liquid waste produced by us all when using the toilet, having a bath or shower, or washing clothes and dishes. In some [places], it also [includes] rain-water falling on [houses] and [roads]. In big [towns] and cities, it can also [have] liquid [waste] from [factories] in it. It [flows] in pipes called [sewers] to be cleaned up at a sewage [treatment] works. Sewage is mostly water but it also has many microbes some of which can be harmful. ",

        ], [
            "id" => "FITB148",
            "sentence" => "English is the current lingua franca of international business, science, and technology. The [rise] of English in diplomacy [began] in 1919, after World War One, [when] the Treaty of Versailles was [written] in English as [well] as in French. The [use] of English [profited] from the [important] international [role] of English-speaking [nations] after World War II, particularly in the [establishment] and [organization] of the United Nations. English is one of the six official languages of the United Nations.",

        ], [
            "id" => "FITB149",
            "sentence" => "In many places around the world, children have to go to school for a certain number of years. Learning may [take] place in the [classroom], in outside [environments] or on [visits] to other places. Colleges and [universities] are places to learn for students [over] 17 or 18. Vocational schools [teach] skills people [need] for jobs. Some people [attend] school [longer] than others. This is because some jobs require more training than others. ",

        ], [
            "id" => "FITB150",
            "sentence" => "When Abraham Lincoln first took office in 1861, the United States was not truly united. The [nation] had been arguing for more than a [hundred] years about enslaving people and [each] state’s right to [allow] it. Now Northerners and [Southerners] were [close] to war. When he [became] president, Lincoln [allowed] the enslavement of people to [continue] in southern [states] but he [outlawed] its spread to other [existing] states and states that might later join the Union.",

        ], [
            "id" => "FITB151",
            "sentence" => "What is the sugar tax? Since last [year], the makers of soft drinks have had to [pay] more tax under new [rules] about the [amount] of sugar that goes into their [products]. The new rules say that each liter of sugary [drink] would have an [extra] tax [charge], depending on how much [sugar] is in the drink. It's all to try to [put] people off [buying] drinks with lots of sugar in them, like fizzy pop. The move is hoped to help cut childhood obesity, tooth decay, and illnesses like diabetes.",

        ], [
            "id" => "FITB152",
            "sentence" => '',

        ], [
            "id" => "FITB153",
            "sentence" => "Not all online content can be trusted. When [using] the internet, it is important to [understand] the threats that may [occur]. Technology is [rapidly] evolving and as a result, the [way] that criminals are using the internet is also [changing]. There are a [number] of different [threats] to computer [systems] that include=> social [engineering], malicious code, [human] error. Any risk posed to a computer system from an internet source is considered a cyber threat.",

        ], [
            "id" => "FITB154",
            "sentence" => "Most schools are pretty strict about plagiarism. If you're [caught], you can wind up [suspended] or worse. At the very [least], you're probably going to fail the [assignment]. When you're in [college], some schools will [expel] students who [plagiarize]. And when you're [kicked] out of one college, it can be hard to get into another.",

        ], [
            "id" => "FITB155",
            "sentence" => "Albert Einstein was born in 1879 in Germany. He [grew] to be one of the most [famous] and clever [scientists] ever to have lived. Even as a [young] boy, Einstein [showed] he had a great [mind] for maths and [physics]. During his [lifetime], Albert Einstein [came] up with some amazing [theories] about light, matter, [gravity], space, and time and soon enjoyed world-wide [fame]. On April 18 1955, Albert Einstein died at the age of 76 from heart failure.",

        ], [
            "id" => "FITB156",
            "sentence" => "Superman is a famous comic book character. He is [possibly] the first [modern] superhero character. Superman's [powers] come from the fact that he [grew] up on another planet, Krypton. It is [said] that Krypton had higher gravity than Earth making the [inhabitants] stronger. Also, the [light] of our yellow sun, [versus] Krypton's red sun, gives Superman [additional] powers. The Superman [symbol] and name has [become] a part of American [culture] and can be seen throughout our culture including in songs, as nicknames, in common sayings, and more.",

        ], [
            "id" => "FITB157",
            "sentence" => "Veganism is a philosophy that says people should not eat or use animal products. Vegans [avoid] food that comes from animals, [including] meat, eggs and dairy [products]. A vegan [diet] is sometimes called a [strict] vegetarian diet. Many [vegans] try not to use any [other] animal products, [such] as leather, [wool], feathers, bone, or pearl. They also try to [avoid] buying and [using] products that have been [tested] on animals. They may believe in animal welfare and animal rights and may campaign for these causes.",

        ], [
            "id" => "FITB158",
            "sentence" => "The saguaro cactus is one of the defining plants of the Sonoran Desert. These [plants] are large, tree-like columnar cacti that [develop] branches. also [known] as arms, as they [age], although some [never] grow arms. These arms [generally] bend upward and can [number] over 25. Saguaros are covered with [protective] spines, white [flowers] in the late spring, and red fruit in [summer]. Saguaros are found exclusively in the Sonoran Desert.",

        ]
    ];

    public function run()
    {
        foreach ($this->questionBank as $question) {
            Readings::create([
                'det_id' => $question['id'],
                'sentence' => $question['sentence'],
            ]);
        }
    }
}
