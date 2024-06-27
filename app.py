from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    # Your Python code goes here
    message = "Hello from Python!"

    # Render the HTML template with the message variable
    return render_template('index.html', message=message)

if __name__ == '__main__':
    app.run(debug=True)
