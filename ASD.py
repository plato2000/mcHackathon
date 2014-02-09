from flask import Flask

app = Flask(__name__)

@app.route('/')

def phPer():
	linestring = open("index.php", "r").read()
	aTing = linestring.split("\n")
	return "".join(aTing)

if __name__ == '__main__':
    app.run()