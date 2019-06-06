# webQCM doc [(english version below)](#web-QCM-doc-en)

Questionnaire à choix multiple avec identification de l'élève et statistiques.

## Fonctionnalités :

* résultats individuels
* ne nécessite pas d'inscription de la part des élèves
* création du questionnaire en éditant un simple fichier texte
* 3 types de questions possibles (choix multiple, choix simple, texte libre)
* les questions et les propositions sont mélangées aléatoirement
* un tableau recense les résultats pour chaque élève, le temps passé, etc.
* possibilité de mettre des images ou du code latex dans les questions
* adapté pour les mobiles, tablettes ou PC.

## Installation

Décompresser l'archive sur votre site web.

## Configuration

Le texte de fin de questionnaire peut-être édité dans le fichier result.php

## Créer un nouveau questionnaire

Copier le dossier exemple (ex), le renommer et éditer le fichier questions.csv qui se trouve à l'intérieur.

## Syntax du fichier questions.csv

La première ligne est le titre du questionnaire.

La deuxième ligne comprend les classes concernées (cela apparaitra comme un choix dans la page d'identification)

A partir de la troisième ligne ce sont les questions :

il y a 12 champs : type;question;image;tip;r1;r2;r3;r4;r5;r6;r7;r8

### type : s, m ou t.
s pour une question à choix multiple avec une seule bonne réponse.

m pour une question à choix multiple avec plusieurs bonnes réponses.

t pour une réponse texte.

### question
l'intitulé de la question

### image
l'url de l'image url. Laisser vide s'il n'y a pas d'image pour la question.

### tip
un commentaire qui sera affiché après la question.

### r1,r2,... : les réponses possibles.

#### Comment définir la bonne réponse :

Pour une question simple : c'est la première réponse (r1).

Pour une question multiple: les réponses sont dans le champ r1, elles doivent être séparées par le charactère "|".

Pour une réponse texte : Il n'y a que le champ r1. Toutes les réponses acceptées sont séparées par "|". La réponse n'est pas sensible à la casse.
	
## Statistiques

Pour visualiser les statistiques, il suffit d'aller sur webQCM/myStatV sur votre serveur.

# webQCM doc en

Multiple choice quiz with identification and statistics.

## Features

* no regisration required
* individual results
* edit a text file to create your quiz
* 3 questions type (simple, multiple, and text answer)
* shuffled questions and answers
* latex or image can be used
* a tip is shown after the question
* responsive
* statistics (score, time spend, ... )

## Installation

Just push webQCM to your webserver

## Configuration

The text at the end of quiz can be edited in result.php

## Create new quiz

Copy ex folder and rename it. Edit questions.csv

## questions.csv syntax

First line is the quiz title

Second line are the class concerned separated by semi-column.

Third line and followings are questions. All fields are semi-column separated. Put one question per line.

There are 12 fields : type;question;image;tip;r1;r2;r3;r4;r5;r6;r7;r8

### Type : s, m or t.
        s for multiple choice question with one correct answer.
        m for multiple choice question with multiple correct answer.
        t for a text answer.

### questions
your question

### image
image url. If there is no image leave blank.

### tip
a tip which is displayed after the answer is validated. Can contain method to find answer.

### r1,r2,...
answers

### how can I choose which answer is correct

In case of simple question : the first answer (r1) is the correct answer.

In case of multiple question : put all the corrects answer in r1 field, all anwer has to be separated by "|".

In case of text answer : there is only r1 field. All accepted answers must be separated by "|". The answer is case insensitive.

## Statistiques

To get stats, simply go to webQCM/myStatV on your server.
