import matplotlib.pyplot as plt
import numpy as np
from matplotlib.animation import FuncAnimation

# Membuat data
x = np.linspace(0, 2*np.pi, 100)
y = np.sin(x)

# Membuat figur dan axis
fig, ax = plt.subplots()
line, = ax.plot(x, y)

# Fungsi untuk update animasi
def update(frame):
    line.set_ydata(np.sin(x + frame / 10.0))  # Update data
    return line,

# Membuat animasi
ani = FuncAnimation(fig, update, frames=range(100), blit=True)

# Menampilkan animasi
plt.show()
