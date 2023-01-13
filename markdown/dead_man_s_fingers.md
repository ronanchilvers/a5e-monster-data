---
statblock: true
name: "Dead Man's Fingers - A5E"
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Plant
cr: 10
ac: 15
hp: 190
hit_dice: '20d8 + 100'
speed: '0 ft.'
stats:
    - 20
    - 10
    - 20
    - 1
    - 12
    - 1
condition_immunities: 'blinded, charmed, deafened, fatigue, frightened, prone, restrained, stunned'
saves:
    - { intelligence: -1 }
    - { charisma: -1 }
senses: 'blindsight 90 ft. (blind beyond this radius), passive Perception 11'
traits:
    - { name: 'Ethereal and Material', desc: "The dead man's fingers lives simultaneously on the Ethereal and Material Planes. Its senses extend into both planes, and it can touch and be touched by creatures on both planes." }
    - { name: 'Ethereal Shift', desc: "When a creature on the Material Plane touches the dead man's fingers or hits it with a melee attack, the creature is magically transported to the Ethereal Plane. The creature can see and hear into both the Ethereal and Material Plane but is unaffected by creatures and objects on the Material Plane. It can be seen as a ghostly form by creatures on the Material Plane. It can move in any direction, with each foot of movement up or down costing 2 feet of movement." }
    - { name: "If the creature is still on the Ethereal Plane when the dead man's fingers dies, the creature returns to the Material Plane", desc: 'If this would cause a creature to appear in a space occupied by a solid object or creature, it is shunted to the nearest unoccupied space and takes 10 (3d6) force damage.' }
    - { name: Flammable, desc: "After taking fire damage, the dead man's fingers catches fire and takes ongoing 11 (2d10) fire damage if it isn't already suffering ongoing fire damage. It can spend an action or bonus action to extinguish this fire." }
actions:
    - { name: Multiattack, desc: "The dead man's fingers makes two tendril attacks." }
    - { name: 'Tendril (Ethereal or Material Plane)', desc: 'Melee Weapon Attack: +9 to hit, reach 20 ft., one creature. Hit: 10 (1d10 + 5) bludgeoning damage plus 10 (3d6) poison damage. A target on the Material Plane is subject to the Ethereal Shift trait.' }
    - { name: 'Ethereal Spores (While Bloodied, Ethereal Plane Only)', desc: "Each creature within 30 feet makes a DC 15 Constitution saving throw, taking 31 (9d6) necrotic damage on a failed save or half damage on a success. A creature reduced to 0 hit points by this damage dies. If a creature killed by this attack remains on the Ethereal Plane for 24 hours, its corpse disintegrates, and a new dead man's fingers sprouts from its place." }
'bonus actions':
    - { name: 'Telekinetic Pull (Ethereal or Material Plane)', desc: "One creature within 90 feet makes a DC 15 Strength saving throw. On a failure, it is magically pulled up to 60 feet straight towards the dead man's fingers." }
combat:
    - { name: "The dead man's fingers uses Telekinetic Pull to move a distant creature near it", desc: 'It uses Ethereal Spores if there are creatures within range on the Ethereal Plane.' }

---
```statblock
monster: Dead Man's Fingers - A5E
```
