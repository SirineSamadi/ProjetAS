#!C:\Users\sirin\AppData\Local\Programs\Python\Python37\python.exe
print("Content-Type: text/HTML\n\r\n\r")

import mysql.connector
from tkinter import *


def fctEnvoyer():
    envoyer = "Vous : " + e.get()
    txt.insert(END, "\n" + envoyer + "\n")
    
    
    db = mysql.connector.connect(host="localhost",    
                    user="root",       
                    passwd="",  
                    db="coiff")        

    cur = db.cursor()

    if 'produit' in e.get():
        cur.execute("SELECT * FROM produit where qte>0")
        
        txt.insert(END, "\n" + "JoJo : \n")
        txt.insert(END,"\t                              \n")
        txt.insert(END,"\t     Produit          Prix    \n")
        txt.insert(END,"\t  --------------    ---------\n")
        for row in cur.fetchall():
            txt.insert(END,"\n\t "+  row[1]+ "          " +  str(int(row[3]))+ "$")
        txt.insert(END,"\n\t ---------------------------------")
            
    elif 'coiffeur'  in e.get():
        cur.execute("SELECT * FROM coiffeur")
        txt.insert(END, "\n" + "JoJo : \n")
        for row in cur.fetchall():
            txt.insert(END, "\n\t" + row[1] + " " + row[2] + "\n")
    
    elif 'bonjour' in e.get():
        txt.insert(END, "\n" + "JoJo : Bonjour! comment puis-je vous aider ?"+ "\n")
     
    elif 'salut' in e.get():
        txt.insert(END, "\n" + "JoJo : Bonjour! comment puis-je vous aider ?"+ "\n")
         
    elif 'rendezvous' in e.get():
        txt.insert(END, "\n" + "JoJo : Pour prendre un rendez-vous, veuillez vous vous connecter puis cliquer sur la section 'rendez-vous'."+ "\n")  
        
    elif 'adresse' in e.get():
        cur.execute("SELECT * FROM salon")
        for row in cur.fetchall():
            txt.insert(END, "\n" + "JoJo : l'adresse de notre salon est : " + row[2] + "\n")
        
    elif 'numero' in e.get():
        cur.execute("SELECT * FROM salon")
        for row in cur.fetchall():
            txt.insert(END, "\n" + "JoJo : le numero de téléphone de notre salon est : " + row[3] + "\n")
            
    elif 'horaire' in e.get():
        cur.execute("SELECT * FROM salon")
        for row in cur.fetchall():
            txt.insert(END, "\n" + "JoJo : l'horarire de notre salon est : " + row[4] + "\n")
            
    elif 'info' in e.get():
        cur.execute("SELECT * FROM salon")
        for row in cur.fetchall():
            txt.insert(END, "\n" + "JoJo : quelques informations sur notre salon : \n\n" + row[6] + "\n")
            
    else :
        txt.insert(END, "\n" + "JoJo : "+ "Je suis désolé, je n'ai compris ce que vous avez dit. Pourriez-vous s'il vous plaît le reformuler ?\n")    
            
            
    e.delete(0,END)
    db.close()





tablette = Tk()
txt = Text(tablette)
txt.grid(row=0, column=0,columnspan=3)
e = Entry(tablette, width=100)
e.grid(row=2,column=0)
BtnEnvoi = Button(tablette, text="Envoyer", command = fctEnvoyer).grid(row=2,column=2)
txt.insert(END, "\n" + "JoJo : Bonjour! Je m'appelle JoJo, votre ami chatbot ! je peux : " + 
               "\n -	Afficher les coiffeurs qui travaillent avec nous. \n - 	Afficher les produits disponibles et leurs prix."
               + "\n -	Répondre à certaines de vos questions!	"+ "\n")


tablette.title("JoJo")
tablette.mainloop()







