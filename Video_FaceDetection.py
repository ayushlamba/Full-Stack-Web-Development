import numpy as np
import cv2

cap = cv2.VideoCapture(0)

def detect_face(img):
    face_img = img.copy()
    face_rects = face_cascade.detectMultiScale(face_img,scaleFactor=1.2, minNeighbors=10)
    for (x,y,w,h) in face_rects:
        cv2.rectangle(face_img, (x,y), (x+w,y+h), (255,255,255), 5)
    return face_img

face_cascade = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')


while True:

     ret, frame = cap.read(0)

     frame = detect_face(frame)
     cv2.imshow('Video Face Detection', frame)

     c = cv2.waitKey(1)
     if c == 27:
         break

cap.release()
cv2.destroyAllWindows()
