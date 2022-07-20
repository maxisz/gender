# import pandas as pd 
import os, glob
path = 'inputs'
for filename in glob.glob(os.path.join(path, '*.txt')):
   with open(os.path.join(os.getcwd(), filename), 'r') as f: # open in readonly mode
        text = f.read()
        print('new :' + filename + text)