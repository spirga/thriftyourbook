<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;
use App\Models\Book;

class BookGenreBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::create([
            'book_title' => 'Harry Potter and the Sorcerers Stone',
            'book_author' => 'J.K. Rowling',
            'book_description' => "Harry Potter's life is miserable. His parents are dead and he's stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he's a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry. After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry. Though Harry's first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it's his responsibility to prevent it from falling into evil hands. But doing so will bring him into contact with forces more terrifying than he ever could have imagined.",
            'book_year' => 1997,
            'book_language' => 'ENG'
        ]);   
        $genre = Genre::find([1,12,14,9]); 
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Chamber of Secrets',
            'book_author' => 'J.K. Rowling',
            'book_description' => "Ever since Harry Potter had come home for the summer, the Dursleys had been so mean and hideous that all Harry wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he's packing his bags, Harry receives a warning from a strange impish creature who says that if Harry returns to Hogwarts, disaster will strike. And strike it does. For in Harry's second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor and a spirit who haunts the girls' bathroom. But then the real trouble begins – someone is turning Hogwarts students to stone. Could it be Draco Malfoy, a more poisonous rival than ever? Could it possible be Hagrid, whose mysterious past is finally told? Or could it be the one everyone at Hogwarts most suspects… Harry Potter himself!",
            'book_year' => 1998,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Prisoner of Azkaban',
            'book_author' => 'J.K. Rowling',
            'book_description' => "During his third year at Hogwarts School for Witchcraft and Wizardry, Harry Potter must confront the devious and dangerous wizard responsible for his parents' deaths.",
            'book_year' => 1999,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Goblet of Fire',
            'book_author' => 'J.K. Rowling',
            'book_description' => "Harry Potter is midway through his training as a wizard and his coming of age. Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup with Hermione, Ron, and the Weasleys. He wants to dream about Cho Chang, his crush (and maybe do more than dream). He wants to find out about the mysterious event that's supposed to take place at Hogwarts this year, an event involving two other rival schools of magic, and a competition that hasn't happened for hundreds of years. He wants to be a normal, fourteen-year-old wizard. But unfortunately for Harry Potter, he's not normal - even by wizarding standards. And in his case, different can be deadly.",
            'book_year' => 2000,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Order of the Phoenix',
            'book_author' => 'J.K. Rowling',
            'book_description' => "There is a door at the end of a silent corridor. And it's haunting Harry Pottter's dreams. Why else would he be waking in the middle of the night, screaming in terror? Harry has a lot on his mind for this, his fifth year at Hogwarts: a Defense Against the Dark Arts teacher with a personality like poisoned honey; a big surprise on the Gryffindor Quidditch team; and the looming terror of the Ordinary Wizarding Level exams. But all these things pale next to the growing threat of He-Who-Must-Not-Be-Named - a threat that neither the magical government nor the authorities at Hogwarts can stop. As the grasp of darkness tightens, Harry must discover the true depth and strength of his friends, the importance of boundless loyalty, and the shocking price of unbearable sacrifice. His fate depends on them all.",
            'book_year' => 2003,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Half-Blood Prince',
            'book_author' => 'J.K. Rowling',
            'book_description' => "The war against Voldemort is not going well; even Muggle governments are noticing. Ron scans the obituary pages of the Daily Prophet, looking for familiar names. Dumbledore is absent from Hogwarts for long stretches of time, and the Order of the Phoenix has already suffered losses. And yet . . . As in all wars, life goes on. The Weasley twins expand their business. Sixth-year students learn to Apparate - and lose a few eyebrows in the process. Teenagers flirt and fight and fall in love. Classes are never straightforward, through Harry receives some extraordinary help from the mysterious Half-Blood Prince. So it's the home front that takes center stage in the multilayered sixth installment of the story of Harry Potter. Here at Hogwarts, Harry will search for the full and complete story of the boy who became Lord Voldemort - and thereby find what may be his only vulnerability.",
            'book_year' => 2005,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Harry Potter and the Deathly Hallows',
            'book_author' => 'J.K. Rowling',
            'book_description' => "It's no longer safe for Harry at Hogwarts, so he and his best friends, Ron and Hermione, are on the run. Professor Dumbledore has given them clues about what they need to do to defeat the dark wizard, Lord Voldemort, once and for all, but it's up to them to figure out what these hints and suggestions really mean. Their cross-country odyssey has them searching desperately for the answers, while evading capture or death at every turn. At the same time, their friendship, fortitude, and sense of right and wrong are tested in ways they never could have imagined. The ultimate battle between good and evil that closes out this final chapter of the epic series takes place where Harry's Wizarding life began: at Hogwarts. The satisfying conclusion offers shocking last-minute twists, incredible acts of courage, powerful new forms of magic, and the resolution of many mysteries. Above all, this intense, cathartic book serves as a clear statement of the message at the heart of the Harry Potter series: that choice matters much more than destiny, and that love will always triumph over death.",
            'book_year' => 2007,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,14,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'A Little Life',
            'book_author' => 'Hanya Yanagihara',
            'book_description' => "A Little Life follows four college classmates—broke, adrift, and buoyed only by their friendship and ambition—as they move to New York in search of fame and fortune. While their relationships, which are tinged by addiction, success, and pride, deepen over the decades, the men are held together by their devotion to the brilliant, enigmatic Jude, a man scarred by an unspeakable childhood trauma. A hymn to brotherly bonds and a masterful depiction of love in the twenty-first century, Hanya Yanagihara's stunning novel is about the families we are born into, and those that we make for ourselves.",
            'book_year' => 2015,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,10]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'The Seven Husbands of Evelyn Hugo',
            'book_author' => 'Taylor Jenkins Reid',
            'book_description' => "Evelyn Hugo is finally ready to tell the truth about her glamorous and scandalous life. But when she chooses unknown magazine reporter Monique Grant for the job, no one in the journalism community is more astounded than Monique herself. Why her? Why now? Monique is not exactly on top of the world. Her husband, David, has left her, and her career has stagnated. Regardless of why Evelyn has chosen her to write her biography, Monique is determined to use this opportunity to jumpstart her career. Summoned to Evelyn's Upper East Side apartment, Monique listens as Evelyn unfurls her story: from making her way to Los Angeles in the 1950s to her decision to leave show business in the late 80s, and, of course, the seven husbands along the way. As Evelyn's life unfolds through the decades—revealing a ruthless ambition, an unexpected friendship, and a great forbidden love—Monique begins to feel a very a real connection to the actress. But as Evelyn's story catches up with the present, it becomes clear that her life intersects with Monique's own in tragic and irreversible ways. Filled with emotional insight and written with Reid's signature talent, this is a fascinating journey through the splendor of Old Hollywood into the harsh realities of the present day as two women struggle with what it means—and what it takes—to face the truth",
            'book_year' => 2017,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,8,10]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Where the Crawdads Sing',
            'book_author' => 'Delia Owens',
            'book_description' => "For years, rumors of the “Marsh Girl” haunted Barkley Cove, a quiet fishing village. Kya Clark is barefoot and wild; unfit for polite society. So in late 1969, when the popular Chase Andrews is found dead, locals immediately suspect her. But Kya is not what they say. A born naturalist with just one day of school, she takes life's lessons from the land, learning the real ways of the world from the dishonest signals of fireflies. But while she has the skills to live in solitude forever, the time comes when she yearns to be touched and loved. Drawn to two young men from town, who are each intrigued by her wild beauty, Kya opens herself to a new and startling world–until the unthinkable happens. In Where the Crawdads Sing, Owens juxtaposes an exquisite ode to the natural world against a profound coming of age story and haunting mystery. Thought-provoking, wise, and deeply moving, Owens’s debut novel reminds us that we are forever shaped by the child within us, while also subject to the beautiful and violent secrets that nature keeps. The story asks how isolation influences the behavior of a young woman, who like all of us, has the genetic propensity to belong to a group. The clues to the mystery are brushed into the lush habitat and natural histories of its wild creatures.",
            'book_year' => 2018,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,8,4,10]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Conversations with Friends',
            'book_author' => 'Sally Rooney',
            'book_description' => "Frances is twenty-one years old, cool-headed and observant. A student in Dublin and an aspiring writer, at night she performs spoken word with her best friend Bobbi, who used to be her girlfriend. When they are interviewed and then befriended by Melissa, a well-known journalist who is married to Nick, an actor, they enter a world of beautiful houses, raucous dinner parties and holidays in Provence, beginning a complex ménage-à-quatre. But when Frances and Nick get unexpectedly closer, the sharply witty and emotion-averse Frances is forced to honestly confront her own vulnerabilities for the first time.",
            'book_year' => 2017,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,10]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Norwegian Wood',
            'book_author' => 'Haruki Murakami',
            'book_description' => "Toru, a quiet and preternaturally serious young college student in Tokyo, is devoted to Naoko, a beautiful and introspective young woman, but their mutual passion is marked by the tragic death of their best friend years before. Toru begins to adapt to campus life and the loneliness and isolation he faces there, but Naoko finds the pressures and responsibilities of life unbearable. As she retreats further into her own world, Toru finds himself reaching out to others and drawn to a fiercely independent and sexually liberated young woman. A magnificent blending of the music, the mood, and the ethos that was the sixties with the story of one college student's romantic coming of age, Norwegian Wood brilliantly recaptures a young man's first, hopeless, and heroic love.",
            'book_year' => 1987,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,7]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Before the Coffee Gets Cold',
            'book_author' => 'Toshikazu Kawaguchi',
            'book_description' => "In a small back alley in Tokyo, there is a café which has been serving carefully brewed coffee for more than one hundred years. But this coffee shop offers its customers a unique experience: the chance to travel back in time. In Before the Coffee Gets Cold, we meet four visitors, each of whom is hoping to make use of the café's time-travelling offer, in order to: confront the man who left them, receive a letter from their husband whose memory has been taken by early onset Alzheimer's, to see their sister one last time, and to meet the daughter they never got the chance to know. But the journey into the past does not come without risks: customers must sit in a particular seat, they cannot leave the café, and finally, they must return to the present before the coffee gets cold . . . Toshikazu Kawaguchi's beautiful, moving story explores the age-old question: what would you change if you could travel back in time? More importantly, who would you want to meet, maybe for one last time?",
            'book_year' => 2015,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,9]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Little Women',
            'book_author' => 'Louisa May Alcott',
            'book_description' => "Generations of readers young and old, male and female, have fallen in love with the March sisters of Louisa May Alcott's most popular and enduring novel, Little Women. Here are talented tomboy and author-to-be Jo, tragically frail Beth, beautiful Meg, and romantic, spoiled Amy, united in their devotion to each other and their struggles to survive in New England during the Civil War. It is no secret that Alcott based Little Women on her own early life. While her father, the freethinking reformer and abolitionist Bronson Alcott, hobnobbed with such eminent male authors as Emerson, Thoreau, and Hawthorne, Louisa supported herself and her sisters with 'woman's work,' including sewing, doing laundry, and acting as a domestic servant. But she soon discovered she could make more money writing. Little Women brought her lasting fame and fortune, and far from being the 'girl's book' her publisher requested, it explores such timeless themes as love and death, war and peace, the conflict between personal ambition and family responsibilities, and the clash of cultures between Europe and America.",
            'book_year' => 1868,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,7,4,8,14]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'The Great Gatsby',
            'book_author' => 'F. Scott Fitzgerald',
            'book_description' => "The Great Gatsby, F. Scott Fitzgerald's third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story of the fabulously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted 'gin was the national drink and sex the national obsession,' it is an exquisitely crafted tale of America in the 1920s.",
            'book_year' => 1925,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,4,7]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Educated',
            'book_author' => 'Tara Westover',
            'book_description' => "Tara Westover was 17 the first time she set foot in a classroom. Born to survivalists in the mountains of Idaho, she prepared for the end of the world by stockpiling home-canned peaches and sleeping with her 'head-for-the-hills bag'. In the summer she stewed herbs for her mother, a midwife and healer, and in the winter she salvaged in her father's junkyard. Her father forbade hospitals, so Tara never saw a doctor or nurse. Gashes and concussions, even burns from explosions, were all treated at home with herbalism. The family was so isolated from mainstream society that there was no one to ensure the children received an education and no one to intervene when one of Tara's older brothers became violent. Then, lacking any formal education, Tara began to educate herself. She taught herself enough mathematics and grammar to be admitted to Brigham Young University, where she studied history, learning for the first time about important world events like the Holocaust and the civil rights movement. Her quest for knowledge transformed her, taking her over oceans and across continents, to Harvard and to Cambridge. Only then would she wonder if she'd traveled too far, if there was still a way home. Educated is an account of the struggle for self-invention. It is a tale of fierce family loyalty and of the grief that comes with severing the closest of ties. With the acute insight that distinguishes all great writers, Westover has crafted a universal coming-of-age story that gets to the heart of what an education is and what it offers: the perspective to see one's life through new eyes and the will to change it.",
            'book_year' => 2018,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([17]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Lepnums un Aizspriedumi',
            'book_author' => 'Džeina Ostina',
            'book_description' => 'Romānā ""Lepnums un aizspriedumi"", kas ļoti veiksmīgi tapis arī ekranizēts, Džeina Ostina savdabīgā veidā atspoguļo Anglijas smalko aprindu dzīvi 18. gadsimta nogalē, atklājot cīņu starp jūtām un laikmeta noteiktajām morāles normām, kas jāizcīna ikvienai jaunai meitenei, kura vēlas iziet pie vīra. Šī cēlā mērķa piepildīšanu mēdz kavēt gan vecāku pārāk lielā uzcītība, gan nenovīdīgi draugi un izskatīgās sāncenses. ""Džeinas Ostinas darbu stils un materiāls no pirmā acu uzmetiena var šķist novecojis, nereālistisks. Tomēr šāds uzskats ir maldi, kuriem ļaujas ""slikti"" lasītāji. ""Labs"" lasītājs zina, ka meklēt grāmatā reālo dzīvi un cilvēkus ir visnotaļ bezjēdzīga nodarbe. Grāmatā sastopamo cilvēku, notikumu vai apstākļu atveidošanas patiesums ir salīdzināms tikai un vienīgi ar tās lapaspusēs radīto pasauli. Savdabīgs autors vienmēr rada savdabīgu pasauli, un, ja tēlotais varonis iekļaujas radītās pasaules struktūrā, mēs priecājamies kopā ar māksliniecisko patiesību, lai cik arī ļoti pretrunā šis tēls ir ar to, ko nožēlojamie skrīveri – recenzenti sauc par reālo dzīvi. Talantīgam autoram reālā dzīve kā tāda neeksistē, viņš pats to veido un apdzīvo.""',
            'book_year' => 1813,
            'book_language' => 'LV'
        ]);
        $genre = Genre::find([1,7,8,4]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Robinsons Krūzo',
            'book_author' => 'Daniels Defo',
            'book_description' => 'Visā pasaulē pazīstamā dēkaiņa piedzīvojumi neapdzīvotā salā, kur viņš iemācās izdzīvot pilnīgi nepierastos un, liekas, neiespējamos apstākļos.',
            'book_year' => 1719,
            'book_language' => 'LV'
        ]);
        $genre = Genre::find([7,1,8]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Jāzeps un viņa brāļi',
            'book_author' => 'Rainis',
            'book_description' => 'Raiņa (1865–1929) traģēdija „Jāzeps un viņa brāļi” (1919) ir viens no spožākajiem latviešu dramaturģijas sasniegumiem. Izmantojot Vecās Derības leģendu par brāļiem, kas nodod savu brāli, Rainis risina mīlestības un naida, nodevības un atriebes problēmu. Luga ir dziļi personiska, jo tajā daudz no paša dzejnieka izdzīvotā.',
            'book_year' => 1919,
            'book_language' => 'LV'
        ]);
        $genre = Genre::find([18]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Kalendārs mani sauc',
            'book_author' => 'Andris Kalnozols',
            'book_description' => 'Andra Kalnozola romāna ""Kalendārs mani sauc"" centrālais tēls ir jauns vīrietis ar grūti definējamu garīgās veselības stāvokli. Brīžiem šķiet, ka viņa prāts strādā kā bērnam, citkārt – ka labāk nekā vairumam pieaugušo. Stāsta struktūru veido vietējās mazpilsētas mācītājam rakstītas vēstules, kurās galvenais varonis reflektē par savā dzīvē notiekošo, tādējādi iepazīstot pats sevi un apkārtējo pasauli. Nelaimīga iemīlēšanās viņu novedusi pie eksistenciālas nepieciešamības no galvas iemācīties katra kalendāra datumā svinamās vārdadienas, lai ""nokļūtu tuvāk"" iecerētajai meitenei, proti, – starp visiem vārdiem atrodams arī viņējais. Oskara jeb Kalendāra atmiņas īpatnības un spēja pārdabiski koncentrēties uz specifiskiem uzdevumiem ne tikai atklāj ļoti īpatnēju psiholoģisko varoņa portretu, bet arī dzen uz priekšu aizkustinošus, aizraujošus un uzjautrinošus notikumu pavērsienus. Kalnozola rakstības stilā apvienota dzejai radniecīga poētiskā pasaules uztvere, kas izpaužas spilgtā tēlainībā, un maģiskajam reālismam radniecīga atmosfēra. Vienlaikus to caurvij prasmīgi veidota sižeta struktūra un veikla stāsta dinamika. Autors spējis ap dzelžainu kodola koncepciju apvīt intimitāti veidojošas nianses, caur personīgām detaļām iedzīvināt tēlus un katru stāsta pavērsienu padarīt par atsevišķu piedzīvojumu, vienlaikus pārliecinoši kontrolējot radīto pasauli un uzturot intrigu. Grāmatas redaktors – Henriks Eliass Zēgners.',
            'book_year' => 2020,
            'book_language' => 'LV'
        ]);
        $genre = Genre::find([1]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Death of a Salesman',
            'book_author' => 'Arthur Miller',
            'book_description' => "For a salesman, there is no rock bottom to life. He don't put a bolt to a nut, he don't tell you the law or give you medicine. He's a man way out there in the blue, riding on a smile and a shoeshine.' Willy Loman has been a salesman for 34 years. At 60, he is cast aside, his usefulness now exhausted. With no future to dream about he must face the crushing disappointments of his past. He takes one final brave action, but is he heroic at last?, or a self-deluding fool?",
            'book_year' => 1949,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([7,18]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Dorfpunks',
            'book_author' => 'Rocko Schamoni',
            'book_description' => 'Entschuldigung, es ging nicht anders Hatte die taz recht, als sie schrieb, Rocko Schamoni sei «lustiger als hierzulande erlaubt, und ernster als hierzulande gewünscht»? Natürlich, dieses Buch ist der Beweis. Es ist die Erinnerung an eine Jugend, wie sie viele hatten. Kühe, Mofas, Bier, Konfirmanendenunterricht, Schulstress, Liebeskummer und die tödliche Langeweile auf dem flachen Land, die Windstille am Ende der schlimmen Siebziger. Doch dann kam PUNK, und PUNK kam auch nach Schmalenstedt in Schleswig-Holstein.',
            'book_year' => 2005,
            'book_language' => 'DEU'
        ]);
        $genre = Genre::find([1,3]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'The 5 AM Club: Own Your Morning. Elevate Your Life',
            'book_author' => 'Robin S. Sharma',
            'book_description' => 'Legendary leadership and elite performance expert Robin Sharma introduced The 5am Club concept over twenty years ago, based on a revolutionary morning routine that has helped his clients maximize their productivity, activate their best health and bulletproof their serenity in this age of overwhelming complexity. Now, in this life-changing book, handcrafted by the author over a rigorous four-year period, you will discover the early-rising habit that has helped so many accomplish epic results while upgrading their happiness, helpfulness and feelings of aliveness. Through an enchanting—and often amusing—story about two struggling strangers who meet an eccentric tycoon who becomes their secret mentor, The 5am Club will walk you through: How great geniuses, business titans and the world’s wisest people start their mornings to produce astonishing achievements A little-known formula you can use instantly to wake up early feeling inspired, focused and flooded with a fiery drive to get the most out of each day A step-by-step method to protect the quietest hours of daybreak so you have time for exercise, self-renewal and personal growth A neuroscience-based practice proven to help make it easy to rise while most people are sleeping, giving you precious time for yourself to think, express your creativity and begin the day peacefully instead of being rushed “Insider-only” tactics to defend your gifts, talents and dreams against digital distraction and trivial diversions so you enjoy fortune, influence and a magnificent impact on the world Part manifesto for mastery, part playbook for genius-grade productivity and part companion for a life lived beautifully, The 5am Club is a work that will transform your life. Forever.',
            'book_year' => 2018,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([11,17]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'The Fellowship of the Ring',
            'book_author' => 'J.R.R. Tolkien',
            'book_description' => 'One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkeness bind them In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, The Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell into the hands of Bilbo Baggins, as told in The Hobbit. In a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as his elderly cousin Bilbo entrusts the Ring to his care. Frodo must leave his home and make a perilous journey across Middle-earth to the Cracks of Doom, there to destroy the Ring and foil the Dark Lord in his evil purpose.',
            'book_year' => 1954,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,12,9,7,3]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => "On Earth We Are Briefly Gorgeous",
            'book_author' => 'Ocean Vuong',
            'book_description' => "This is a letter from a son to a mother who cannot read. Written when the speaker, Little Dog, is in his late twenties, the letter unearths a family's history that began before he was born. It tells of Vietnam, of the lasting impact of war, and of his family's struggle to forge a new future. And it serves as a doorway into parts of Little Dog's life his mother has never known - episodes of bewilderment, fear and passion - all the while moving closer to an unforgettable revelation.",
            'book_year' => 2019,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,15]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'Wuthering Heights',
            'book_author' => 'Emily Brontë',
            'book_description' => "Lockwood, the new tenant of Thrushcross Grange on the bleak Yorkshire moors, is forced to seek shelter one night at Wuthering Heights, the home of his landlord. There he discovers the history of the tempestuous events that took place years before: of the intense passion between the foundling Heathcliff and Catherine Earnshaw, and her betrayal of him. As Heathcliff's bitterness and vengeance is visited upon the next generation, their innocent heirs must struggle to escape the legacy of the past.",
            'book_year' => 1847,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,7,8]);
        $book->genres()->attach($genre);
        $book = Book::create([
            'book_title' => 'American Psycho',
            'book_author' => 'Bret Easton Ellis',
            'book_description' => "Patrick Bateman is twenty-six and he works on Wall Street, he is handsome, sophisticated, charming and intelligent. He is also a psychopath. Taking us to head-on collision with America's greatest dream—and its worst nightmare—American Psycho is bleak, bitter, black comedy about a world we all recognise but do not wish to confront.",
            'book_year' => 1991,
            'book_language' => 'ENG'
        ]);
        $genre = Genre::find([1,6,2]);
        $book->genres()->attach($genre);
    }
}