from flask import Flask, render_template, request, redirect, url_for
import sqlite3

app = Flask(__name__)

def init_sqlite_db():
    conn = sqlite3.connect('database.sqlite')
    conn.execute('CREATE TABLE IF NOT EXISTS contatos (id INTEGER PRIMARY KEY, nome TEXT, email TEXT)')
    conn.close()

init_sqlite_db()

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/contato', methods=['POST'])
def contato():
    if request.method == 'POST':
        nome = request.form['nome']
        email = request.form['email']

        conn = sqlite3.connect('database.sqlite')
        conn.execute('INSERT INTO contatos (nome, email) VALUES (?, ?)', (nome, email))
        conn.commit()
        conn.close()

        return "Dados inseridos com sucesso!"

if __name__ == '__main__':
    app.run(debug=True)
