---
statblock: true
name: 'Scarecrow Harvester'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Construct
cr: 4
ac: 14
hp: 67
hit_dice: '9d8 + 27'
speed: '40 ft.'
stats:
    - 16
    - 18
    - 16
    - 12
    - 14
    - 16
damage_resistances: 'bludgeoning, piercing'
damage_immunities: poison
condition_immunities: 'charmed, fatigue, frightened, paralyzed, petrified, poisoned'
senses: 'darkvision 60 ft., passive Perception 12'
languages: "understands the languages of its creator but can't speak"
traits:
    - { name: Flammable, desc: "After taking fire damage, the scarecrow catches fire and takes 5 (1d10) ongoing fire damage if it isn't already suffering ongoing fire damage. A creature can spend an action to extinguish this fire." }
    - { name: Spell-created, desc: 'The DC for dispel magic to disable this creature is 19. A disabled scarecrow is inanimate. After one hour, it becomes animate again unless its body has been destroyed.' }
actions:
    - { name: Multiattack, desc: 'The scarecrow uses Scare and makes two claw attacks.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) slashing damage plus 3 (1d6) necrotic damage.' }
    - { name: Scare, desc: "Each creature of the scarecrow's choice within 30 feet that can see the scarecrow makes a DC 13 Wisdom saving throw. On a failure, it is magically frightened for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If a creature's saving throw is successful or the effect ends for it, it is immune to Scare for 24 hours." }
    - { name: 'Fire Breath (Recharge 46)', desc: 'The scarecrow exhales fire in a 30-foot cone. Each creature in the area makes a DC 13 Dexterity saving throw, taking 14 (4d6) fire damage on a failed save or half damage on a success.' }
    - { name: 'Pumpkin Head (1/Day)', desc: 'The scarecrow throws its head up to 60 feet. Each creature within 20 feet of the head makes a DC 13 Dexterity saving throw, taking 21 (6d6) fire damage on a failed save or half damage on a success. After using this action, the scarecrow no longer has a head. It can still use its senses but can no longer use Fire Breath. It can create a new head when it finishes a long rest.' }
    - { name: 'Invisibility (1/Day)', desc: 'The scarecrow, along with any mount it is riding, is invisible for 1 hour or until it attacks or uses Scare, Fire Breath, or Pumpkin Head.' }
combat:
    - { name: 'The scarecrow uses Scare', desc: "It then uses Fire Breath when it can and its claws when it can't. When it's bloodied, it uses Pumpkin Head. If its enemies aren't close to defeat at this point, it uses Invisibility and tries to escape." }

---
```statblock
monster: Scarecrow Harvester
```
